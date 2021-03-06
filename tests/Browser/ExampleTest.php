<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        // $this->browse(function (Browser $browser) {
        //     $browser->visit('/')
        //             ->assertSee('Aplicacion + Angular');
        // });

        $this->browse(function (Browser $browser) {
            $browser->visit('/api/prueba')
                    ->assertSee('esto es una prueba');
            // $save = '#btn-save';
            // $button = '#btn-add';
            // $titulo_addocente = 'Agregar nuevo Docente';
            // $homepage = 'Aplicacion Laravel + Angular';
            // $browser->visit('/')
            //         ->pause(1000)
            //         ->click($button)
            //         ->assertSee($titulo_addocente)
            //         ->pause(1000)
            //         ->type('nombre', 'Dusk')
            //         ->type('apellido','Duskman')
            //         ->type('email','Duskman@gmail.com')
            //         ->click($save)
            //         ->assertSee($homepage);
        });
    }
}
