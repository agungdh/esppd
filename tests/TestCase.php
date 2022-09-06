<?php

namespace Tests;

use App\Models\User;
use Auth;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends BaseTestCase
{
    use CreatesApplication;

    public function redirectWhenUnauthenticatedAndForbiddenWhenUnauthorized($path)
    {
        $response = $this->get($path);
        $response->assertStatus(302);
        $response->assertRedirect('/login');

        $this->createUserAndLogin();

        $response = $this->get($path);
        $response->assertForbidden();
    }

    public function redirectWhenUnauthenticatedAndOkWhenAuthorized($path)
    {
        $response = $this->get($path);
        $response->assertStatus(302);
        $response->assertRedirect('/login');

        $this->loginAsAdmin();

        $response = $this->get($path);
        $response->assertOk();
    }

    public function unauthorized($method, $path)
    {
        $method = $method.'Json';

        $response = $this->$method($path);
        $response->assertUnauthorized();
    }

    public function forbidden($method, $path)
    {
        $method = $method.'Json';

        $response = $this->$method($path);
        $response->assertForbidden();
    }

    public function createUserAndLoginAndForbidden($method, $path)
    {
        $this->loginAsUser($this->createUser());
        $this->forbidden($method, $path);
        Auth::logout();
    }

    public function createUserAndLogin()
    {
        $this->loginAsUser($this->createUser());
    }

    public function loginAsAdmin()
    {
        $this->loginAsUser(User::first());
    }

    private function createUser()
    {
        return User::factory()->create();
    }

    private function loginAsUser($user)
    {
        return Auth::login($user);
    }
}
