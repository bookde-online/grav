<?php

namespace Grav\Theme;

use DateTime;
use DateTimeZone;
use Grav\Common\Grav;
use Grav\Common\Theme;

class Quark extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onThemeInitialized'    => ['onThemeInitialized', 0],
            'onTwigLoader'          => ['onTwigLoader', 0],
            'onTwigInitialized'     => ['onTwigInitialized', 0],
        ];
    }

    public function onThemeInitialized()
    {
        // Theme initialization logic if needed
    }

    // Add images to twig template paths to allow inclusion of SVG files
    public function onTwigLoader()
    {
        $theme_paths = Grav::instance()['locator']->findResources('theme://images');
        foreach ($theme_paths as $images_path) {
            $this->grav['twig']->addPath($images_path, 'images');
        }
    }

    public function onTwigInitialized()
    {
        $twig = $this->grav['twig'];

        // Form styling classes
        $form_class_variables = [
            'form_button_outer_classes' => 'button-wrapper',
            'form_button_classes' => 'btn',
            'form_errors_classes' => '',
            'form_field_outer_classes' => 'form-group',
            'form_field_outer_label_classes' => 'form-label-wrapper',
            'form_field_label_classes' => 'form-label',
            'form_field_input_classes' => 'form-input',
            'form_field_textarea_classes' => 'form-input',
            'form_field_select_classes' => 'form-select',
            'form_field_radio_classes' => 'form-radio',
            'form_field_checkbox_classes' => 'form-checkbox',
        ];

        // Merge styling variables
        $twig->twig_vars = array_merge($twig->twig_vars, $form_class_variables);

        // Generate timezones dropdown options
        $twig->twig_vars['grouped_timezones'] = $this->generate_grouped_timezones();
    }

    /**
     * Generate an array of timezones with GMT offset labels
     *
     * @return array of ['id' => timezone identifier, 'label' => formatted label]
     */
   protected function generate_grouped_timezones()
{
    $timezones = DateTimeZone::listIdentifiers();
    $grouped = [];

    $utcNow = new DateTime('now', new DateTimeZone('UTC'));

    foreach ($timezones as $tz) {
        $timezone = new DateTimeZone($tz);
        $offset = $timezone->getOffset($utcNow);

        $hours = floor($offset / 3600);
        $minutes = abs(($offset % 3600) / 60);
        $formattedOffset = sprintf("GMT%+03d:%02d", $hours, $minutes);
        $groupLabel = "({$formattedOffset})";

        // Label hiển thị: (GMT+07:00) Asia - Ho Chi Minh
        $label = "({$formattedOffset}) " . str_replace("_", " ", str_replace("/", " - ", $tz));

        // Gom nhóm
        if (!isset($grouped[$groupLabel])) {
            $grouped[$groupLabel] = [];
        }

        $grouped[$groupLabel][$tz] = $label;
    }

    // Sắp xếp theo offset
    ksort($grouped);
    return $grouped;
}

}
