<?php

namespace Tests\Feature;

use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactPageTest extends TestCase
{
    use RefreshDatabase;

    protected $user;
    
    public function setUp()
    {
        parent::setUp();

        $this->ensureUser();
    }

    public function ensureUser()
    {
        $user = factory(User::class)->create(
            ['name'  => 'Porky "Test User" Pig',
             'email' => 'p.pig@gmail.com',
            ]);
        $user->save();

        $this->user = User::findOrFail(1);
        $this->assertEquals('Porky "Test User" Pig', $this->user->name );
    }

    /**
     * A basic test example.
     *
     * @test
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }


    /**
     * Add Contact Link Test.
     *
     * @test
     * @return void
     */
    public function hasAddContactLink()
    {
        $this->actingAs($this->user)
             ->get('home')
             ->assertSee('Add Contact');
    }


    /**
     * Search Contact Form Test.
     *
     * @test
     * @return void
     */
    public function hasSearchContactForm()
    {
        $this->actingAs($this->user)
             ->get('/home')
             ->assertSee('Search');
    }

    /**
     * Contact List Test.
     *
     * @test
     * @return void
     */
    public function hasContactList()
    {
        $this->actingAs($this->user)
             ->get('/home')
             ->assertSee('Add Contact');
    }



}
