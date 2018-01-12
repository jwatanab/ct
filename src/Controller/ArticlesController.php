<?php

// コントローラを継承するために使用する
namespace App\Controller;

// データベースを操作するために使用する、Modelを指定しなくてもこの一文でデータベースを操作できる
use Cake\ORM\TableRegistry;

   /**
   * Routeで指定するコントローラ、変数を渡せる
   * Viewファイルはコントローラ名(Controllerを除く)/関数名として指定する
   */

class ArticlesController extends AppController
{
  
  // 親となるコンポーネントのレイアウト先のフォルダを指定する
   
  public function initialize()
  {
    $this->viewBuilder()->layout('index');
  }

  // データベースから
  public function index()
  {
    $query = TableRegistry::get('articles')->find()->where(['state' => 'yat']);
    $query0 = TableRegistry::get('articles')->find()->where(['state' => 'done']);

    $this->set(compact('query','query0'));
  }

  public function lg($id) 
  {
    $result = TableRegistry::get('articles')->find()->where(['id' => $id]);
    $this->set(compact('result'));
  }

  public function add(){
    $articles = TableRegistry::get('Articles');

    $article = $articles->newEntity();

    $article->name = $this->request->getQuery('name');
    $article->state = 'yat';
    $articles->save($article);
    $this->redirect(['action' => 'index']);
  }

  public function del(){
    $entity = $this->Articles->get($this->request->getQuery('id'));
    $result = $this->Articles->delete($entity);
    $this->redirect(['action' => 'index']);    
  }

  public function state(){
    $articles = TableRegistry::get('Articles');
    $article = TableRegistry::get('Articles')->get($this->request->getQuery('id'));
    $article->state === 'yat' ? $article->state = 'done' : $article->state = 'yat';
    $articles->save($article);
    $this->redirect(['action' => 'index']);
  }
}