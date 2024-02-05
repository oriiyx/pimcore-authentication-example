<?php
// declare(strict_types=1);

namespace ExampleBundle\EventListeners;

use Pimcore\Model\Document\Editable\Wysiwyg;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use ToolboxBundle\Event\HeadlessEditableActionEvent;
use ToolboxBundle\ToolboxEvents;


class ToolboxEventListener implements EventSubscriberInterface
{

    public function headlessEditableAction(HeadlessEditableActionEvent $headlessEditableActionEvent): void
    {
        $info = $headlessEditableActionEvent->getInfo();
        $document = $info->getDocument();
        $editables = $document->getEditables();

        foreach ($editables as $editable){
            if($editable instanceof Wysiwyg){
                $data = $editable->getData();

                //// Transform data somehow
                $editable->setDataFromResource($data);
            }
         }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            ToolboxEvents::HEADLESS_EDITABLE_ACTION => [
                'headlessEditableAction'
            ]
        ];
    }
}