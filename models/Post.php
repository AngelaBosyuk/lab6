<?php
class Post {
    public $title;
    public $content;

    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    public static function getAll() {
        return [
            new Post("Мій перший пост", "Це приклад першого поста в блозі."),
            new Post("MVC у PHP", "MVC — це розділення коду на три частини: Model, View, Controller."),
            new Post("Composer", "Composer — менеджер залежностей для PHP."),
            new Post("GitHub", "GitHub — сервіс для спільної роботи над кодом."),
            new Post("Наступний крок", "Далі можна додати пошук або базу даних.")
        ];
    }
}
