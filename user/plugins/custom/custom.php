<?php
namespace Grav\Plugin;

use Grav\Common\Plugin;
use RocketTheme\Toolbox\Event\Event;

class CustomPlugin extends Plugin
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onFormProcessed' => ['onFormProcessed', 0],
        ];
    }

    public function onFormProcessed(Event $event): void
    {
        $action = $event['action'];
        $form = $event['form'];

        if ($action === 'create_service_page') {
            $this->createServicePage($form->value('header.services'));
        }
    }

    protected function createServicePage(array $services): void
    {
        $pagesDir = $this->grav['locator']->findResource('user://pages');
        $serviceDir = $pagesDir . '/03.services/';

        foreach ($services as $service) {
            $slug = $this->slugify($service['title']);
            $newPageDir = $serviceDir . $slug;

            if (!file_exists($newPageDir)) {
                mkdir($newPageDir, 0775, true);
            }

            $image = $service['image'][array_key_first($service['image'])]['path'];

            $pageContent = "---\n";
            $pageContent .= "title: '{$service['title']}'\n";
            $pageContent .= "template: service-detail\n";
            $pageContent .= "subtitle: '{$service['subtitle']}'\n";
            $pageContent .= "description: '{$service['description']}'\n";
            $pageContent .= "image: '{$image}'\n";
            $pageContent .= "---\n";
            $pageContent .= "{{ page.content }}\n";

            file_put_contents($newPageDir . '/item.md', $pageContent);
        }
    }

    private function slugify(string $text): string
    {
        $text = strtolower(trim($text));
        $text = preg_replace('/[^a-z0-9]+/', '-', $text);
        return trim($text, '-');
    }
}
