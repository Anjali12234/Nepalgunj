<?php

namespace App\helpers;

use App\Models\Menu;

class HelperMenu
{
    public static function getFrontUrl(Menu $menu, ?string $language = 'ne'): string
    {
        $menu->load('model');
        if ($menu->menus_count > 0) {
            return "#";
        } else {

            if (!empty($menu->model)) {

                return match ($menu->type) {
                    'Property' => route('propertyCategory', [$menu->model->slug]),
                    'HealthCare' => route('healthCareCategory', [$menu->model->slug]),
                    'Education' => route('educationCategory', [$menu->model->id]),
                };
            } else {
                return route('static', [$menu->slug]);
            }
        }
    }

    function repeatCharacter($times, $character = "-")
    {
        $result = '';

        for ($i = 0; $i < $times; $i++) {
            $result .= $character;
        }

        return $result;
    }
}
