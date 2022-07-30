<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//HomeController la ten controller

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $data=[];
    public function index() {

        return view('layouts.index');
    }   
// Science
    public function master_winner() {

        return view('layouts.winner.master_winner');
    }

    public function physic() {
        $this->data['science_describe']= DB::select('SELECT * FROM science_nobel_award WHERE ScienceID=1');
        $this->data['physic_winner']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScienceID = 1');
        return view('layouts.science.physics', $this->data);
    }

    public function chemistry() {
        $this->data['science_describe']= DB::select('SELECT * FROM science_nobel_award WHERE ScienceID=2');
        $this->data['chemistry_winner']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScienceID = 2');
        return view('layouts.science.chemistry',$this->data);
    }

    public function medicine() {
        $this->data['science_describe']= DB::select('SELECT * FROM science_nobel_award WHERE ScienceID=3');
        $this->data['medicine_winner']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScienceID = 3');
        return view('layouts.science.medicine',$this->data);
    }

    public function literature() {
        $this->data['science_describe']= DB::select('SELECT * FROM science_nobel_award WHERE ScienceID=4');
        $this->data['literature_winner']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScienceID = 4');
        return view('layouts.science.literature',$this->data);
    }

    public function peace() {
        $this->data['science_describe']= DB::select('SELECT * FROM science_nobel_award WHERE ScienceID=5');
        $this->data['peace_winner']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScienceID = 5');
        return view('layouts.science.peace',$this->data);
    }



//Winner

public $winner_data=[];

//Physics Winner
    public function Pierre_Curie() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =2');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =2');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =2');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =2');
        return view('layouts.winner.physic_winner.Pierre_Curie',$this->winner_data);
    }
    
    public function Albert_Einstein() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =1');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =1');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =1');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =1');
        return view('layouts.winner.physic_winner.Albert_Einstein',$this->winner_data);
    }

    public function Gabriel_Lippmann() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =4');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =4');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =4');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =4');
        return view('layouts.winner.physic_winner.Gabriel_Lippmann',$this->winner_data);
    }

    public function Hendrik_Lorentz() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =3');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =3');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =3');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =3');
        return view('layouts.winner.physic_winner.Hendrik_Lorentz',$this->winner_data);
    }

    public function Erwin_Schrödinger() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =5');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =5');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =5');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =5');
        return view('layouts.winner.physic_winner.Erwin_Schrödinger',$this->winner_data);
    }


//Chemistry Winner
    public function Harold_Urey() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =6');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =6');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =6');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =6');
       return view('layouts.winner.chemistry_winner.Harold_Urey',$this->winner_data);
    }

    public function Frederick_Soddy() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =7');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =7');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =7');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =7');
        return view('layouts.winner.chemistry_winner.Frederick_Soddy',$this->winner_data);
    }

     public function Alfred_Werner() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =8');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =8');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =8');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =8');
        return view('layouts.winner.chemistry_winner.Alfred_Werner',$this->winner_data);
    }

     public function Irène_Joliot_Curie() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =9');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =9');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =9');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =9');
        return view('layouts.winner.chemistry_winner.Irène_Joliot_Curie',$this->winner_data);
    }

     public function Hermann_Staudinger() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =10');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =10');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =10');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =10');
        return view('layouts.winner.chemistry_winner.Hermann_Staudinger',$this->winner_data);
    }


//Medicine Winner
    public function Emil_von_Behring() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =11');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =11');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =11');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =11');
       return view('layouts.winner.medicine_winner.Emil_von_Behring',$this->winner_data);
    }

    public function Ronald_Ross() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =12');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =12');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =12');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =12');
        return view('layouts.winner.medicine_winner.Ronald_Ross',$this->winner_data);
    }

     public function Archibald_Hill() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =13');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =13');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =13');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =13');
        return view('layouts.winner.medicine_winner.Archibald_Hill',$this->winner_data);
    }

     public function Hermann_Joseph_Muller() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =14');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =14');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =14');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =14');
        return view('layouts.winner.medicine_winner.Hermann_Joseph_Muller',$this->winner_data);
    }

     public function Joshua_Lederberg() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =15');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =15');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =15');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =15');
        return view('layouts.winner.medicine_winner.Joshua_Lederberg',$this->winner_data);
    }


//Literature Winner
    public function Ernest_Hemingway() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =16');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =16');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =16');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =16');
        return view('layouts.winner.literature_winner.Ernest_Hemingway',$this->winner_data);
    }

    public function Pablo_Neruda() { 
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =17');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =17');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =17');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =17');
        return view('layouts.winner.literature_winner.Pablo_Neruda',$this->winner_data);
    }

    public function Pearl_Buck() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =18');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =18');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =18');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =18');
        return view('layouts.winner.literature_winner.Pearl_Buck',$this->winner_data);
    }

    public function George_Bernard_Shaw() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =19');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =19');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =19');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =19');
        return view('layouts.winner.literature_winner.George_Bernard_Shaw',$this->winner_data);
    }

    public function Gabriel_García_Márquez() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =20');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =20');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =20');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =20');
        return view('layouts.winner.literature_winner.Gabriel_García_Márquez',$this->winner_data);
    }


//Peace Winner
    public function Bertha_Von_Suttner() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =22');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =22');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =22');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =22');
        return view('layouts.winner.peace_winner.Bertha_Von_Suttner',$this->winner_data);
    }

    public function Elihu_Root() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =25');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =25');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =25');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =25');
        return view('layouts.winner.peace_winner.Elihu_Root',$this->winner_data);
    }

    public function Frédéric_Passy() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =23');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =23');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =23');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =23');
        return view('layouts.winner.peace_winner.Frédéric_Passy',$this->winner_data);
    }

    public function Fredrik_Bajer() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =24');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =24');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =24');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =24');
        return view('layouts.winner.peace_winner.Fredrik_Bajer',$this->winner_data);
    }

    public function Theodore_Roosevelt() {
        $this->winner_data['winner_data_award']=DB::select('SELECT * FROM scientist_nobel_award WHERE ScientistID =21');
        $this->winner_data['winner_data_detail']=DB::select('SELECT * FROM scientist_detail WHERE ScientistID =21');
        $this->winner_data['winner_data_books']=DB::select('SELECT * FROM scientist_books WHERE ScientistID =21');
        $this->winner_data['winner_data_chart']=DB::select('SELECT * FROM scientist_chart WHERE ScientistID =21');
        return view('layouts.winner.peace_winner.Theodore_Roosevelt',$this->winner_data);
    }


}

?>
