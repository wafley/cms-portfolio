<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class IconsController extends BaseController
{
    protected array $icons;

    public function __construct()
    {
        $this->icons = [
            [
                'name'              => 'Font Awesome',
                'documentation_url' => 'https://fontawesome.com/icons',
                'instruction'       => 'Ikon sumber terbuka yang sangat populer dan lengkap. Gunakan prefix seperti fas, far, atau fab.',
                'example_usage'     => '<i class="fas fa-ICON_NAME"></i>',
                'preview'           => [
                    'fab fa-500px',
                    'fa fa-address-book',
                    'far fa-address-book',
                    'fa fa-address-card',
                    'far fa-address-card',
                    'fa fa-adjust',
                    'fab fa-adn',
                    'fa fa-align-center',
                    'fa fa-align-justify',
                    'fa fa-align-left',
                ]
            ],
            [
                'name'              => 'Material Design Icons',
                'documentation_url' => 'https://pictogrammers.com/library/mdi/',
                'instruction'       => 'Ikon resmi Material Design dari Google.',
                'example_usage'     => '<i class="mdi mdi-ICON_NAME"></i>',
                'preview'           => [
                    'mdi mdi-access-point',
                    'mdi mdi-access-point-network',
                    'mdi mdi-account',
                    'mdi mdi-account-alert',
                    'mdi mdi-account-box',
                    'mdi mdi-account-box-outline',
                    'mdi mdi-card-account-details',
                    'mdi mdi-account-check',
                    'mdi mdi-account-circle',
                    'mdi mdi-account-convert',
                ]
            ],
            [
                'name'              => 'Simple Line Icons',
                'documentation_url' => 'https://simplelineicons.github.io/',
                'instruction'       => 'Icon sederhana dengan gaya garis (outline).',
                'example_usage'     => '<i class="si si-ICON_NAME"></i>',
                'preview'           => [
                    'si si-user',
                    'si si-people',
                    'si si-user-female',
                    'si si-user-following',
                    'si si-user-unfollow',
                    'si si-login',
                    'si si-logout',
                    'si si-emotsmile',
                    'si si-phone',
                    'si si-compass',
                ]
            ],
            [
                'name'              => 'Feather Icons',
                'documentation_url' => 'https://feathericons.com/',
                'instruction'       => 'Icon ringan dengan gaya outline, cocok untuk UI minimalis.',
                'example_usage'     => '<i class="fe fe-ICON_NAME"></i>',
                'preview'           => [
                    'fe fe-activity',
                    'fe fe-alert-circle',
                    'fe fe-alert-triangle',
                    'fe fe-bar-chart-2',
                    'fe fe-bell',
                    'fe fe-camera',
                    'fe fe-copy',
                    'fe fe-eye',
                    '"fe fe-file',
                    'fe fe-layout',
                ]
            ],
            [
                'name'              => 'Ionicons',
                'documentation_url' => 'https://ionic.io/ionicons',
                'instruction'       => 'Ikon modern yang umum digunakan di aplikasi mobile dan web.',
                'example_usage'     => '<i class="ion ICON_NAME"></i>',
                'preview'           => [
                    'ti-arrow-up',
                    'ti-arrow-right',
                    'ti-arrow-left',
                    'ti-arrow-down',
                    'ti-arrows-vertical',
                    'ti-arrows-horizontal',
                    'ti-angle-up',
                    'ti-angle-right',
                    'ti-angle-left',
                    'ti-angle-down',
                ]
            ],
            [
                'name'              => 'Themify Icons',
                'documentation_url' => 'https://themify.me/themify-icons',
                'instruction'       => 'Ikon ringan dan mudah digunakan untuk dashboard.',
                'example_usage'     => '<i class="ti-ICON_NAME"></i>',
                'preview'           => [
                    'ti-arrow-up',
                    'ti-arrow-right',
                    'ti-arrow-left',
                    'ti-arrow-down',
                    'ti-arrows-vertical',
                    'ti-arrows-horizontal',
                    'ti-angle-up',
                    'ti-angle-right',
                    'ti-angle-left',
                    'ti-angle-down',
                ]
            ],
            [
                'name'              => 'Typicons',
                'documentation_url' => 'https://www.s-ings.com/typicons/',
                'instruction'       => 'Ikon vektor dengan desain bersih dan modern.',
                'example_usage'     => '<i class="typcn typcn-ICON_NAME"></i>',
                'preview'           => [
                    'typcn typcn-chart-pie-outline',
                    'typcn typcn-chart-pie',
                    'typcn typcn-chevron-left',
                    'typcn typcn-chevron-right',
                    'typcn typcn-clipboard',
                    'typcn typcn-cloud-storage',
                    'typcn typcn-code',
                    'typcn typcn-coffee',
                    'typcn typcn-cog',
                    'typcn typcn-compass',
                ]
            ],
            [
                'name'              => 'Line Awesome',
                'documentation_url' => 'https://icons8.com/line-awesome',
                'instruction'       => 'Alternatif Font Awesome dengan class yang hampir sama.',
                'example_usage'     => '<i class="las la-ICON_NAME"></i>',
                'preview'           => [
                    'las la-bell',
                    'las la-exclamation-circle',
                    'las la-exclamation-triangle',
                    'las la-arrow-alt-circle-down',
                    'las la-arrow-alt-circle-up',
                    'las la-arrow-alt-circle-left',
                    'las la-arrow-alt-circle-right',
                    'las la-history',
                    'las la-headphones',
                    'las la-tv',
                ]
            ],
            [
                'name'              => 'Boxicons',
                'documentation_url' => 'https://boxicons.com/',
                'instruction'       => 'Icon modern dengan gaya solid, regular, dan logo.',
                'example_usage'     => '<i class="bx bx-ICON_NAME"></i>',
                'preview'           => [
                    'bx bx-home',
                    'bx bx-home-alt',
                    'bx bx-box',
                    'bx bx-medal',
                    'bx bx-file',
                    'bx bx-palette',
                    'bx bx-receipt',
                    'bx bx-table',
                    'bx bx-bar-chart-alt',
                    'bx bx-layer',
                ]
            ],
            [
                'name'              => 'Tabler Icons',
                'documentation_url' => 'https://tabler-icons.io/',
                'instruction'       => 'Ikon open-source dengan gaya modern dan konsisten.',
                'example_usage'     => '<i class="ti ti-ICON_NAME"></i>',
                'preview'           => [
                    'ti ti-brand-tabler',
                    'ti ti-activity-heartbeat',
                    'ti ti-alert-octagon',
                    'ti ti-album',
                    'ti ti-antenna-bars-5',
                    'ti ti-armchair',
                    'ti ti-arrow-big-right',
                    'ti ti-arrows-shuffle-2',
                    'ti ti-backspace',
                    'ti ti-color-picker',
                ]
            ],
            [
                'name'              => 'Remix Icons',
                'documentation_url' => 'https://remixicon.com/',
                'instruction'       => 'Ikon modern, konsisten, dan sangat lengkap untuk UI profesional.',
                'example_usage'     => '<i class="ri-ICON_NAME"></i>',
                'preview'           => [
                    'ri-home-line',
                    'ri-mail-line',
                    'ri-briefcase-line',
                    'ri-window-line',
                    'ri-chat-2-line',
                    'ri-chat-settings-line',
                    'ri-edit-line',
                    'ri-layout-line',
                    'ri-code-s-slash-line',
                    'ri-airplay-line',
                ]
            ],
            [
                'name'              => 'Bootstrap Icons',
                'documentation_url' => 'https://icons.getbootstrap.com/',
                'instruction'       => 'Ikon resmi Bootstrap berbasis SVG, ringan dan konsisten.',
                'example_usage'     => '<i class="bi bi-ICON_NAME"></i>',
                'preview'           => [
                    'bi bi-arrow-left-circle',
                    'bi bi-arrows-move',
                    'bi bi-bag',
                    'bi bi-bar-chart-line',
                    'bi bi-basket',
                    'bi bi-bell',
                    'bi bi-book',
                    'bi bi-box',
                    'bi bi-briefcase',
                    'bi bi-brightness-high',
                ]
            ],
        ];
    }

    public function index()
    {
        $data = [
            'icons' => $this->icons
        ];

        return view('admin/icons', $data);
    }
}
