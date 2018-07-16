<?php

// 3-й вопрос из mySQL
        $books = $book
                 ->has('authors', '=', '1')
                 ->get();

/**
 * Laravel
 */ 
        
// 1
// Метод sync удаляет все связи в pivot-таблице, 
// заполняя новыми из переданного массива (не знал о методе, не пользовался) 


// 2
class Question2
{
    public $timestamps = false; 
}

// 3
class BookController extends Controller
{
    public function index(Book $book) {
        $findOne = $book->find(1);
        $getFirst = $book->first();
        
        dd($findOne, $getFirst);
    }
}

// 4
class Author
{
    // Один ко многим, обратная связь
    public function book() {
        return $this->belongsTo(Book::class);    
    }
    
    // Многие ко многим
    public function book() {
        return $this->belongsToMany(Book::class);    
    }    
    
}

// 5
// Видимо, речь идет о методе pivot (не использовал)

    $book = $book->find(1);

    foreach ($book->authors as $author) {
        echo $author->pivot;
    }

    // {"book_id":1,"author_id":2}{"book_id":1,"author_id":3}{"book_id":1,"author_id":5}

// 6
// Заполнить одно из свойств
class Question6
{    
    // Что разрешено массово заполнять
    protected $fillable = [
        'id',
        'name',
        'etc'
    ];
    
    // Что запрещено массово заполнять, остальные поля разрешено
    protected $guarded = [
        'etc'
    ];
}

// 7
class BookController extends Controller
{
    public function index(Book $book) {
        $books = $book->with('authors')->get();
        
        foreach ($books as $book) {
            echo $book->name, ': ';
            foreach ($book->authors as $author) {
                echo $author->name, ', ';
            }
            echo '<br>';
        }
    }
}