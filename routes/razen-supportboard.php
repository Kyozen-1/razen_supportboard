<?php

Route::prefix('razen-supportboard')->group(function(){
    Route::prefix('admin')->group(function(){
        Route::prefix('dashboard')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\DashboardController@index')->name('razen-supportboard.admin.dashboard.index');
            Route::post('/change', 'RazenSupportboard\Admin\DashboardController@change')->name('razen-supportboard.admin.dashboard.change');
        });

        Route::prefix('profil')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\ProfilController@index')->name('razen-supportboard.admin.profil.index');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\ProfilController@show');
            Route::post('/','RazenSupportboard\Admin\ProfilController@store')->name('razen-supportboard.admin.profil.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\ProfilController@edit');
            Route::post('/update','RazenSupportboard\Admin\ProfilController@update')->name('razen-supportboard.admin.profil.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\ProfilController@destroy');
            Route::post('/edit-media-sosial-profil', 'RazenSupportboard\Admin\ProfilController@edit_media_sosial_profil')->name('razen-supportboard.admin.profil.edit-media-sosial-profil');
            Route::post('/tambah-media-sosial-profil', 'RazenSupportboard\Admin\ProfilController@tambah_media_sosial_profil')->name('razen-supportboard.admin.profil.tambah-media-sosial-profil');
        });

        Route::prefix('produk-razen')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\ProdukRazenController@index')->name('razen-supportboard.admin.produk-razen.index');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\ProdukRazenController@show')->name('razen-supportboard.admin.produk-razen.show');
            Route::post('/','RazenSupportboard\Admin\ProdukRazenController@store')->name('razen-supportboard.admin.produk-razen.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\ProdukRazenController@edit')->name('razen-supportboard.admin.produk-razen.edit');
            Route::post('/update','RazenSupportboard\Admin\ProdukRazenController@update')->name('razen-supportboard.admin.produk-razen.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\ProdukRazenController@destroy')->name('razen-supportboard.admin.produk-razen.destroy');
        });

        Route::prefix('fitur')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\FiturController@index')->name('razen-supportboard.admin.fitur.index');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\FiturController@show')->name('razen-supportboard.admin.fitur.show');
            Route::post('/','RazenSupportboard\Admin\FiturController@store')->name('razen-supportboard.admin.fitur.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\FiturController@edit')->name('razen-supportboard.admin.fitur.edit');
            Route::post('/update','RazenSupportboard\Admin\FiturController@update')->name('razen-supportboard.admin.fitur.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\FiturController@destroy')->name('razen-supportboard.admin.fitur.destroy');
        });

        Route::prefix('produk')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\ProdukController@index')->name('razen-supportboard.admin.produk.index');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\ProdukController@show')->name('razen-supportboard.admin.produk.show');
            Route::post('/','RazenSupportboard\Admin\ProdukController@store')->name('razen-supportboard.admin.produk.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\ProdukController@edit')->name('razen-supportboard.admin.produk.edit');
            Route::post('/update','RazenSupportboard\Admin\ProdukController@update')->name('razen-supportboard.admin.produk.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\ProdukController@destroy')->name('razen-supportboard.admin.produk.destroy');
        });

        Route::prefix('testimoni')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\TestimoniController@index')->name('razen-supportboard.admin.testimoni.index');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\TestimoniController@show')->name('razen-supportboard.admin.testimoni.show');
            Route::post('/','RazenSupportboard\Admin\TestimoniController@store')->name('razen-supportboard.admin.testimoni.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\TestimoniController@edit')->name('razen-supportboard.admin.testimoni.edit');
            Route::post('/update','RazenSupportboard\Admin\TestimoniController@update')->name('razen-supportboard.admin.testimoni.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\TestimoniController@destroy')->name('razen-supportboard.admin.testimoni.destroy');
        });

        Route::prefix('paket-harga')->group(function(){
            Route::get('/', 'RazenSupportboard\Admin\PaketHargaController@index')->name('razen-supportboard.admin.paket-harga.index');
            Route::get('/create', 'RazenSupportboard\Admin\PaketHargaController@create')->name('razen-supportboard.admin.paket-harga.create');
            Route::get('/detail/{id}', 'RazenSupportboard\Admin\PaketHargaController@show')->name('razen-supportboard.admin.paket-harga.show');
            Route::post('/','RazenSupportboard\Admin\PaketHargaController@store')->name('razen-supportboard.admin.paket-harga.store');
            Route::get('/edit/{id}','RazenSupportboard\Admin\PaketHargaController@edit')->name('razen-supportboard.admin.paket-harga.edit');
            Route::post('/update/{id}','RazenSupportboard\Admin\PaketHargaController@update')->name('razen-supportboard.admin.paket-harga.update');
            Route::get('/destroy/{id}','RazenSupportboard\Admin\PaketHargaController@destroy')->name('razen-supportboard.admin.paket-harga.delete');
        });
    });

    Route::prefix('landing-page')->group(function(){
        Route::prefix('beranda')->group(function(){
            Route::get('/', 'RazenSupportboard\LandingPage\BerandaController@index')->name('razen-supportboard.landing-page.beranda.index');

            Route::post('/store/section-1', 'RazenSupportboard\LandingPage\BerandaController@store_section_1')->name('razen-supportboard.landing-page.beranda.store.section-1');

            Route::post('/store/section-2', 'RazenSupportboard\LandingPage\BerandaController@store_section_2')->name('razen-supportboard.landing-page.beranda.store.section-2');
            Route::post('/store/section-2/konten', 'RazenSupportboard\LandingPage\BerandaController@store_section_2_konten')->name('razen-supportboard.landing-page.beranda.store.section-2.konten');
            Route::post('/hapus/section-2/konten', 'RazenSupportboard\LandingPage\BerandaController@hapus_section_2_konten')->name('razen-supportboard.landing-page.beranda.hapus.section-2.konten');

            Route::post('/store/section-3', 'RazenSupportboard\LandingPage\BerandaController@store_section_3')->name('razen-supportboard.landing-page.beranda.store.section-3');
            Route::post('/store/section-3/konten', 'RazenSupportboard\LandingPage\BerandaController@store_section_3_konten')->name('razen-supportboard.landing-page.beranda.store.section-3.konten');
            Route::post('/hapus/section-3/konten', 'RazenSupportboard\LandingPage\BerandaController@hapus_section_3_konten')->name('razen-supportboard.landing-page.beranda.hapus.section-3.konten');

            Route::post('/store/section-4', 'RazenSupportboard\LandingPage\BerandaController@store_section_4')->name('razen-supportboard.landing-page.beranda.store.section-4');

            Route::post('/store/section-5', 'RazenSupportboard\LandingPage\BerandaController@store_section_5')->name('razen-supportboard.landing-page.beranda.store.section-5');

            Route::post('/store/section-6', 'RazenSupportboard\LandingPage\BerandaController@store_section_6')->name('razen-supportboard.landing-page.beranda.store.section-6');

            Route::post('/store/section-7', 'RazenSupportboard\LandingPage\BerandaController@store_section_7')->name('razen-supportboard.landing-page.beranda.store.section-7');
        });
    });

    Route::prefix('master-data')->group(function(){
        Route::prefix('media-sosial')->group(function(){
            Route::get('/', 'RazenSupportboard\MasterData\MediaSosialController@index')->name('razen-supportboard.master-data.media-sosial.index');
            Route::get('/detail/{id}', 'RazenSupportboard\MasterData\MediaSosialController@show')->name('razen-supportboard.master-data.media-sosial.show');
            Route::post('/','RazenSupportboard\MasterData\MediaSosialController@store')->name('razen-supportboard.master-data.media-sosial.store');
            Route::get('/edit/{id}','RazenSupportboard\MasterData\MediaSosialController@edit')->name('razen-supportboard.master-data.media-sosial.edit');
            Route::post('/update','RazenSupportboard\MasterData\MediaSosialController@update')->name('razen-supportboard.master-data.media-sosial.update');
            Route::get('/destroy/{id}','RazenSupportboard\MasterData\MediaSosialController@destroy')->name('razen-supportboard.master-data.media-sosial.destroy');
        });
    });
});
