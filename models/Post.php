<?php
class Post {
    public $title;
    public $content;
    public $date;

    public function __construct($title, $content, $date = null) {
        $this->title = $title;
        $this->content = $content;
        $this->date = $date ?? date('d.m.Y');
    }

    public static function getAll() {
        return [
            new Post("Мій перший пост", "**Це приклад першого поста в блозі.**"),
            new Post("MVC у PHP", "**_MVC_ — це розділення коду на три частини: Model, View, Controller.**"),
            new Post("Composer", "**_Composer_ — менеджер залежностей для PHP.**"),
            new Post("GitHub", "**_GitHub_ — сервіс для спільної роботи над кодом.**"),
            new Post("Наступний крок", "**Далі можна додати пошук або базу даних.**")
        ];
    }

    public static function search($query) {
        $results = [];
        foreach (self::getAll() as $post) {
            if (stripos($post->title, $query) !== false) {
                $results[] = $post;
            }
        }
        return $results;
    }
}
