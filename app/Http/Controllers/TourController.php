<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourController extends Controller
{
    private $tours =  [
        [
            "id" => "1",
            "name" => "facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus",
            "title" => "tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis,",
            "destination" => "Canberra",
            "day_length" => "4",
            "night_length" => "7",
            "start_date" => "22/09/2023",
            "detail" => "amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus.",
            "description" => "lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas iaculis aliquet diam. Sed diam lorem, auctor quis, tristique ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit.",
            "slots" => "3",
            "slots_left" => "10"
        ],
        [
            "id" => "2",
            "name" => "Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien.",
            "title" => "rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at,",
            "destination" => "Sim",
            "day_length" => "9",
            "night_length" => "5",
            "start_date" => "09/01/2023",
            "detail" => "semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi.",
            "description" => "est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor",
            "slots" => "12",
            "slots_left" => "2"
        ],
        [
            "id" => "3",
            "name" => "ornare. Fusce mollis. Duis sit amet diam eu dolor egestas",
            "title" => "faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor",
            "destination" => "Stigliano",
            "day_length" => "3",
            "night_length" => "8",
            "start_date" => "25/06/2023",
            "detail" => "sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec",
            "description" => "ac, eleifend vitae, erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis",
            "slots" => "13",
            "slots_left" => "14"
        ],
        [
            "id" => "4",
            "name" => "Ut semper pretium neque. Morbi quis urna. Nunc quis arcu",
            "title" => "Sed auctor odio a purus. Duis elementum, dui quis accumsan",
            "destination" => "San Francisco",
            "day_length" => "3",
            "night_length" => "3",
            "start_date" => "12/12/2022",
            "detail" => "ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio,",
            "description" => "lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan",
            "slots" => "20",
            "slots_left" => "18"
        ],
        [
            "id" => "5",
            "name" => "ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices,",
            "title" => "Cras eu tellus eu augue porttitor interdum. Sed auctor odio",
            "destination" => "Serang",
            "day_length" => "6",
            "night_length" => "4",
            "start_date" => "14/01/2022",
            "detail" => "taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie",
            "description" => "bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel, faucibus id, libero. Donec consectetuer mauris id sapien. Cras dolor dolor, tempus non, lacinia at, iaculis quis, pede. Praesent eu dui. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec",
            "slots" => "8",
            "slots_left" => "12"
        ]
    ];

    public function index()
    {
        return view('tour-operator.index', ['tours' => $this->tours]);
    }

    // Show Create Form
    public function create()
    {
        return view('tour-operator.create');
    }

    // Store Tour Data
    public function store()
    {
    }

    // Show Edit Form
    public function edit($id)
    {
        foreach ($this->tours as $tour) {
            if ($tour['id'] == $id)
                return view('tour-operator.edit', ['tour' => $tour]);
        }
    }

    // Update Tour Data
    public function update()
    {
    }

    // Delete Tour
    public function destroy()
    {
    }
}
