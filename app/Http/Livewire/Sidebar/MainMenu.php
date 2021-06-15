<?php

namespace App\Http\Livewire\Sidebar;

use Livewire\Component;

class MainMenu extends Component
{
    public $menus = [];

    public function mount()
    {
        $this->menus = [
            [
                'name' => 'Dashboard',
                'type' => 'single',
                'url' => route('dashboard'),
                'icon' => 'la flaticon-home',
                'subItem' => [
                    [
                        'name' => '',
                        'url' => ''
                    ]
                ]
            ],    
            [
                'name' => 'Master',
                'type' => 'section',
                'url' => '#',
                'icon' => '',
                'subItem' => [
                    [
                        'name' => '',
                        'url' => ''
                    ]
                ]
            ],
            [
                'name' => 'Barang',
                'type' => 'dropdown',
                'url' => 'barangs',
                'icon' => 'la flaticon-box-1',
                'subItem' => [
                    [
                        'name' => __('menu.list', ['type' => 'Barang']),
                        'url' => route('admin.barangs.index'),
                        'icon' => 'la flaticon-list',
                    ],
                    [
                        'name' => __('menu.tambah', ['type' => 'Barang']),
                        'url' => route('admin.barangs.create'),
                        'icon' => 'la flaticon-add'
                    ]
                ]
            ],
        ];
    }
    
    public function render()
    {
        return view('livewire.sidebar.main-menu');
    }
}
