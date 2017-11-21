<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class HomePageTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /**
     * Registration Link Test.
     *
     * @return void
     */
    public function hasRegistrationLink()
    {
        $this->get('/')
             ->assertSee('Registration');
    }

    /**
     * Login Link Test.
     *
     * @return void
     */
    public function hasLoginLink()
    {
        $this->get('/')
             ->assertSee('Login');
    }

    /**
     * FBConnect Link Test.
     *
     * @return void
     */
    public function hasFBConnectLink()
    {
        $this->get('/')
             ->assertSee('Connect with Facebook');
    }

    /**
     * GitHubConnect Link Test.
     *
     * @return void
     */
    public function hasGitHubConnectLink()
    {
        $this->get('/')
             ->assertSee('Connect with GitHub');
    }


}
