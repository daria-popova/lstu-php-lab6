<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class MainController extends BaseController
{
    public function show(array $parameters): Response
    {
        $id = $parameters['id'];

        //some logic

        return $this->renderTemplate('show.php', ['id' => $id, 'title' => 'Заголовок', 'text' => 'Текст']);
    }
}
