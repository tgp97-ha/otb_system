<?php

namespace App\Http\Controllers;

use App\Models\TourOperator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TourOperatorController extends Controller
{

	private $data = [
		[
			"serial" => "1",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "mollis non, cursus non, egestas a,",
			"tour_title" => "rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere",
			"tour_destination" => "Bắc Giang",
			"tour_day_length" => "65",
			"tour_night_length" => "69",
			"tour_start_date" => "Nov 12, 2023",
			"tour_detail" => "mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit",
			"tour_description" => "et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet,",
			"tour_slots" => "34",
			"tour_slots_left" => "37",
			"tour_prices" => "1,491 vnd",
			"tour_place" => "Đồng Hới",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "2",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "consequat purus. Maecenas libero est, congue",
			"tour_title" => "Sed id risus quis diam luctus lobortis. Class",
			"tour_destination" => "Hà Nội",
			"tour_day_length" => "2",
			"tour_night_length" => "65",
			"tour_start_date" => "Sep 9, 2022",
			"tour_detail" => "mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis",
			"tour_description" => "faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non,",
			"tour_slots" => "4",
			"tour_slots_left" => "3",
			"tour_prices" => "1,845 vnd",
			"tour_place" => "Vương",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "3",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "neque. Nullam ut nisi a odio",
			"tour_title" => "Donec tempor, est ac mattis semper, dui lectus rutrum urna,",
			"tour_destination" => "Buôn Ma Thuột",
			"tour_day_length" => "5",
			"tour_night_length" => "33",
			"tour_start_date" => "Sep 30, 2023",
			"tour_detail" => "cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae",
			"tour_description" => "euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit eget laoreet posuere, enim nisl elementum purus,",
			"tour_slots" => "35",
			"tour_slots_left" => "15",
			"tour_prices" => "1,369 vnd",
			"tour_place" => "Quảng Ngãi",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "4",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "est, vitae sodales nisi magna sed dui. Fusce aliquam,",
			"tour_title" => "lectus. Cum sociis natoque penatibus et",
			"tour_destination" => "Lạng Sơn",
			"tour_day_length" => "14",
			"tour_night_length" => "35",
			"tour_start_date" => "Aug 15, 2023",
			"tour_detail" => "eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare",
			"tour_description" => "primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras",
			"tour_slots" => "38",
			"tour_slots_left" => "15",
			"tour_prices" => "1,377 vnd",
			"tour_place" => "Tây Ninh",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "5",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "vel, vulputate eu, odio. Phasellus at augue id",
			"tour_title" => "lacus pede sagittis augue, eu tempor erat neque",
			"tour_destination" => "Lào Cai",
			"tour_day_length" => "83",
			"tour_night_length" => "38",
			"tour_start_date" => "Sep 20, 2023",
			"tour_detail" => "varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor",
			"tour_description" => "Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa",
			"tour_slots" => "40",
			"tour_slots_left" => "13",
			"tour_prices" => "1,180 vnd",
			"tour_place" => "Hà Tĩnh",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "6",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "velit. Aliquam nisl. Nulla eu neque",
			"tour_title" => "nec luctus felis purus ac tellus. Suspendisse sed dolor.",
			"tour_destination" => "Nam Định",
			"tour_day_length" => "56",
			"tour_night_length" => "63",
			"tour_start_date" => "Oct 4, 2022",
			"tour_detail" => "enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque.",
			"tour_description" => "Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet",
			"tour_slots" => "38",
			"tour_slots_left" => "3",
			"tour_prices" => "1,557 vnd",
			"tour_place" => "Lào Cai",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "7",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam",
			"tour_title" => "dictum eleifend, nunc risus varius orci, in consequat",
			"tour_destination" => "Huế",
			"tour_day_length" => "20",
			"tour_night_length" => "5",
			"tour_start_date" => "Jun 3, 2022",
			"tour_detail" => "tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus. Phasellus elit pede, malesuada vel, venenatis vel,",
			"tour_description" => "et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede",
			"tour_slots" => "44",
			"tour_slots_left" => "41",
			"tour_prices" => "1,974 vnd",
			"tour_place" => "Rạch Giá",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "8",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "non sapien molestie orci tincidunt",
			"tour_title" => "rhoncus. Nullam velit dui, semper et,",
			"tour_destination" => "Thủ Dầu Một",
			"tour_day_length" => "40",
			"tour_night_length" => "53",
			"tour_start_date" => "Sep 1, 2022",
			"tour_detail" => "Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor,",
			"tour_description" => "vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer",
			"tour_slots" => "44",
			"tour_slots_left" => "10",
			"tour_prices" => "1,376 vnd",
			"tour_place" => "Cần Thơ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "9",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "dui. Cum sociis natoque penatibus",
			"tour_title" => "dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero",
			"tour_destination" => "Tam Kỳ",
			"tour_day_length" => "78",
			"tour_night_length" => "92",
			"tour_start_date" => "Aug 7, 2022",
			"tour_detail" => "Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit",
			"tour_description" => "Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer",
			"tour_slots" => "50",
			"tour_slots_left" => "30",
			"tour_prices" => "1,530 vnd",
			"tour_place" => "Nha Trang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "10",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "lacus. Aliquam rutrum lorem ac risus.",
			"tour_title" => "Proin sed turpis nec mauris blandit mattis. Cras",
			"tour_destination" => "Đà Nẵng",
			"tour_day_length" => "13",
			"tour_night_length" => "9",
			"tour_start_date" => "May 29, 2023",
			"tour_detail" => "erat. Vivamus nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula. Aliquam erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin",
			"tour_description" => "orci. Phasellus dapibus quam quis diam. Pellentesque habitant morbi tristique senectus et",
			"tour_slots" => "13",
			"tour_slots_left" => "3",
			"tour_prices" => "1,857 vnd",
			"tour_place" => "Biên Hòa",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "11",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "Fusce aliquet magna a neque. Nullam ut nisi a",
			"tour_title" => "sollicitudin orci sem eget massa. Suspendisse eleifend.",
			"tour_destination" => "Quảng Ngãi",
			"tour_day_length" => "12",
			"tour_night_length" => "26",
			"tour_start_date" => "Sep 9, 2022",
			"tour_detail" => "at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit",
			"tour_description" => "Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis,",
			"tour_slots" => "33",
			"tour_slots_left" => "21",
			"tour_prices" => "1,647 vnd",
			"tour_place" => "Thái Nguyên",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "12",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "tortor at risus. Nunc ac sem ut dolor dapibus",
			"tour_title" => "Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet",
			"tour_destination" => "Long Xuyên",
			"tour_day_length" => "16",
			"tour_night_length" => "66",
			"tour_start_date" => "Dec 8, 2021",
			"tour_detail" => "nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices",
			"tour_description" => "magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet,",
			"tour_slots" => "19",
			"tour_slots_left" => "38",
			"tour_prices" => "1,423 vnd",
			"tour_place" => "Phan Thiết",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "13",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "Aliquam ornare, libero at auctor ullamcorper,",
			"tour_title" => "elementum, dui quis accumsan convallis, ante lectus convallis",
			"tour_destination" => "Tây Ninh",
			"tour_day_length" => "75",
			"tour_night_length" => "34",
			"tour_start_date" => "Aug 11, 2023",
			"tour_detail" => "dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas",
			"tour_description" => "ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio.",
			"tour_slots" => "18",
			"tour_slots_left" => "42",
			"tour_prices" => "1,190 vnd",
			"tour_place" => "Lào Cai",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "14",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "pede ac urna. Ut tincidunt vehicula risus.",
			"tour_title" => "Pellentesque habitant morbi tristique senectus",
			"tour_destination" => "Lào Cai",
			"tour_day_length" => "59",
			"tour_night_length" => "84",
			"tour_start_date" => "Mar 6, 2022",
			"tour_detail" => "mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci,",
			"tour_description" => "Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit",
			"tour_slots" => "24",
			"tour_slots_left" => "11",
			"tour_prices" => "1,175 vnd",
			"tour_place" => "Đà Nẵng",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "15",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "sed dictum eleifend, nunc risus varius orci, in consequat",
			"tour_title" => "pretium neque. Morbi quis urna. Nunc quis arcu",
			"tour_destination" => "Bạc Liêu",
			"tour_day_length" => "60",
			"tour_night_length" => "66",
			"tour_start_date" => "Feb 18, 2023",
			"tour_detail" => "volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet",
			"tour_description" => "semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor",
			"tour_slots" => "29",
			"tour_slots_left" => "3",
			"tour_prices" => "1,975 vnd",
			"tour_place" => "Nghĩa Lộ",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "16",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis",
			"tour_title" => "ac tellus. Suspendisse sed dolor. Fusce mi lorem,",
			"tour_destination" => "Bến Tre",
			"tour_day_length" => "74",
			"tour_night_length" => "45",
			"tour_start_date" => "Aug 25, 2022",
			"tour_detail" => "Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a,",
			"tour_description" => "tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit",
			"tour_slots" => "35",
			"tour_slots_left" => "2",
			"tour_prices" => "1,494 vnd",
			"tour_place" => "Hà Nội",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "17",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "lorem eu metus. In lorem.",
			"tour_title" => "semper, dui lectus rutrum urna, nec luctus felis purus",
			"tour_destination" => "Hà Nội",
			"tour_day_length" => "38",
			"tour_night_length" => "18",
			"tour_start_date" => "Dec 19, 2022",
			"tour_detail" => "tempor, est ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula",
			"tour_description" => "Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi",
			"tour_slots" => "20",
			"tour_slots_left" => "47",
			"tour_prices" => "1,352 vnd",
			"tour_place" => "Bắc Giang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "18",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "Duis at lacus. Quisque purus sapien, gravida",
			"tour_title" => "massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc",
			"tour_destination" => "Phát Diệm",
			"tour_day_length" => "56",
			"tour_night_length" => "46",
			"tour_start_date" => "Apr 19, 2022",
			"tour_detail" => "ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed",
			"tour_description" => "Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus,",
			"tour_slots" => "36",
			"tour_slots_left" => "42",
			"tour_prices" => "1,597 vnd",
			"tour_place" => "Kỳ Sơn",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "19",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "tellus eu augue porttitor interdum. Sed",
			"tour_title" => "non justo. Proin non massa non",
			"tour_destination" => "Vinh",
			"tour_day_length" => "90",
			"tour_night_length" => "10",
			"tour_start_date" => "Mar 19, 2023",
			"tour_detail" => "lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit",
			"tour_description" => "eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus.",
			"tour_slots" => "23",
			"tour_slots_left" => "12",
			"tour_prices" => "1,852 vnd",
			"tour_place" => "Vị Thanh",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "20",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "magna. Nam ligula elit, pretium",
			"tour_title" => "semper tellus id nunc interdum feugiat.",
			"tour_destination" => "Xuân Trường",
			"tour_day_length" => "13",
			"tour_night_length" => "36",
			"tour_start_date" => "Feb 18, 2023",
			"tour_detail" => "ornare tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo",
			"tour_description" => "non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer",
			"tour_slots" => "37",
			"tour_slots_left" => "5",
			"tour_prices" => "1,588 vnd",
			"tour_place" => "Tam Kỳ",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "21",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "et libero. Proin mi. Aliquam gravida mauris ut",
			"tour_title" => "mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec",
			"tour_destination" => "Tân An",
			"tour_day_length" => "6",
			"tour_night_length" => "55",
			"tour_start_date" => "Dec 23, 2022",
			"tour_detail" => "facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu",
			"tour_description" => "ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec,",
			"tour_slots" => "1",
			"tour_slots_left" => "18",
			"tour_prices" => "1,470 vnd",
			"tour_place" => "Cao Bằng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "22",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "pede, ultrices a, auctor non, feugiat nec, diam. Duis mi",
			"tour_title" => "neque. In ornare sagittis felis. Donec tempor, est ac mattis",
			"tour_destination" => "Việt Trì",
			"tour_day_length" => "55",
			"tour_night_length" => "63",
			"tour_start_date" => "Apr 30, 2023",
			"tour_detail" => "Mauris vel turpis. Aliquam adipiscing lobortis risus. In mi pede, nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum",
			"tour_description" => "odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec",
			"tour_slots" => "45",
			"tour_slots_left" => "46",
			"tour_prices" => "1,735 vnd",
			"tour_place" => "Nho Quan",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "23",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit",
			"tour_title" => "sit amet ornare lectus justo eu arcu. Morbi",
			"tour_destination" => "Rạch Giá",
			"tour_day_length" => "53",
			"tour_night_length" => "89",
			"tour_start_date" => "Apr 30, 2023",
			"tour_detail" => "eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In",
			"tour_description" => "vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra.",
			"tour_slots" => "21",
			"tour_slots_left" => "7",
			"tour_prices" => "1,138 vnd",
			"tour_place" => "Vinh",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "24",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "urna justo faucibus lectus, a",
			"tour_title" => "rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales",
			"tour_destination" => "Đông Hà",
			"tour_day_length" => "71",
			"tour_night_length" => "44",
			"tour_start_date" => "Jul 4, 2023",
			"tour_detail" => "euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac",
			"tour_description" => "Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna.",
			"tour_slots" => "19",
			"tour_slots_left" => "49",
			"tour_prices" => "1,067 vnd",
			"tour_place" => "Bắc Yên",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "25",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "habitant morbi tristique senectus et netus et",
			"tour_title" => "Proin eget odio. Aliquam vulputate ullamcorper magna. Sed",
			"tour_destination" => "Lào Cai",
			"tour_day_length" => "57",
			"tour_night_length" => "34",
			"tour_start_date" => "Oct 2, 2023",
			"tour_detail" => "dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris",
			"tour_description" => "nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis.",
			"tour_slots" => "21",
			"tour_slots_left" => "28",
			"tour_prices" => "1,570 vnd",
			"tour_place" => "Hòa Mạc",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "26",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "purus ac tellus. Suspendisse sed dolor. Fusce",
			"tour_title" => "ultrices. Duis volutpat nunc sit amet",
			"tour_destination" => "Quảng Ngãi",
			"tour_day_length" => "32",
			"tour_night_length" => "44",
			"tour_start_date" => "Jan 12, 2023",
			"tour_detail" => "ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis",
			"tour_description" => "semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci",
			"tour_slots" => "42",
			"tour_slots_left" => "47",
			"tour_prices" => "1,302 vnd",
			"tour_place" => "Phan Rang–Tháp Chàm",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "27",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum",
			"tour_title" => "ac mi eleifend egestas. Sed pharetra, felis eget varius",
			"tour_destination" => "Phan Thiết",
			"tour_day_length" => "88",
			"tour_night_length" => "46",
			"tour_start_date" => "Nov 13, 2023",
			"tour_detail" => "ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class",
			"tour_description" => "enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio. Phasellus at augue id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend nec, malesuada ut, sem. Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper",
			"tour_slots" => "33",
			"tour_slots_left" => "35",
			"tour_prices" => "1,683 vnd",
			"tour_place" => "Trần Cao",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "28",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "augue ut lacus. Nulla tincidunt, neque vitae semper egestas,",
			"tour_title" => "blandit at, nisi. Cum sociis natoque",
			"tour_destination" => "Đồng Xoài",
			"tour_day_length" => "81",
			"tour_night_length" => "59",
			"tour_start_date" => "May 15, 2023",
			"tour_detail" => "Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque",
			"tour_description" => "tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed,",
			"tour_slots" => "23",
			"tour_slots_left" => "39",
			"tour_prices" => "1,429 vnd",
			"tour_place" => "Kỳ Sơn",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "29",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt",
			"tour_title" => "conubia nostra, per inceptos hymenaeos. Mauris ut quam vel",
			"tour_destination" => "Nho Quan",
			"tour_day_length" => "57",
			"tour_night_length" => "4",
			"tour_start_date" => "Sep 1, 2022",
			"tour_detail" => "rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed turpis nec mauris",
			"tour_description" => "In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue,",
			"tour_slots" => "43",
			"tour_slots_left" => "45",
			"tour_prices" => "1,605 vnd",
			"tour_place" => "Bến Tre",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "30",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "consequat, lectus sit amet luctus vulputate, nisi",
			"tour_title" => "in magna. Phasellus dolor elit,",
			"tour_destination" => "Hợp Hòa",
			"tour_day_length" => "32",
			"tour_night_length" => "52",
			"tour_start_date" => "Jan 8, 2022",
			"tour_detail" => "pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet nec, imperdiet nec, leo. Morbi neque tellus, imperdiet non, vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit",
			"tour_description" => "ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris",
			"tour_slots" => "39",
			"tour_slots_left" => "28",
			"tour_prices" => "1,772 vnd",
			"tour_place" => "Đà Nẵng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "31",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "Etiam laoreet, libero et tristique pellentesque, tellus sem",
			"tour_title" => "facilisis vitae, orci. Phasellus dapibus",
			"tour_destination" => "Hà Nội",
			"tour_day_length" => "92",
			"tour_night_length" => "80",
			"tour_start_date" => "Jan 28, 2023",
			"tour_detail" => "primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus",
			"tour_description" => "Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam",
			"tour_slots" => "10",
			"tour_slots_left" => "16",
			"tour_prices" => "1,059 vnd",
			"tour_place" => "Hòa Bình",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "32",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "facilisis, magna tellus faucibus leo, in lobortis tellus",
			"tour_title" => "eros turpis non enim. Mauris",
			"tour_destination" => "Hà Nội",
			"tour_day_length" => "32",
			"tour_night_length" => "25",
			"tour_start_date" => "Nov 12, 2022",
			"tour_detail" => "ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis",
			"tour_description" => "ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci",
			"tour_slots" => "31",
			"tour_slots_left" => "9",
			"tour_prices" => "1,868 vnd",
			"tour_place" => "Hát Lót",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "33",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "Morbi quis urna. Nunc quis arcu vel quam",
			"tour_title" => "senectus et netus et malesuada fames ac turpis",
			"tour_destination" => "Cao Bằng",
			"tour_day_length" => "52",
			"tour_night_length" => "14",
			"tour_start_date" => "Jun 21, 2023",
			"tour_detail" => "at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida",
			"tour_description" => "purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci.",
			"tour_slots" => "21",
			"tour_slots_left" => "17",
			"tour_prices" => "1,577 vnd",
			"tour_place" => "Quy Nhơn",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "34",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "odio, auctor vitae, aliquet nec, imperdiet",
			"tour_title" => "Donec feugiat metus sit amet ante. Vivamus non lorem",
			"tour_destination" => "Biên Hòa",
			"tour_day_length" => "98",
			"tour_night_length" => "89",
			"tour_start_date" => "Nov 3, 2023",
			"tour_detail" => "ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus",
			"tour_description" => "nec urna et arcu imperdiet ullamcorper. Duis at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor.",
			"tour_slots" => "12",
			"tour_slots_left" => "9",
			"tour_prices" => "1,622 vnd",
			"tour_place" => "Hồ Chí Minh City",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "35",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus",
			"tour_title" => "pede. Nunc sed orci lobortis",
			"tour_destination" => "Da Lat",
			"tour_day_length" => "15",
			"tour_night_length" => "20",
			"tour_start_date" => "Dec 19, 2022",
			"tour_detail" => "elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas",
			"tour_description" => "mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit",
			"tour_slots" => "17",
			"tour_slots_left" => "42",
			"tour_prices" => "1,228 vnd",
			"tour_place" => "Vũ Thư",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "36",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "quis turpis vitae purus gravida sagittis.",
			"tour_title" => "odio tristique pharetra. Quisque ac libero nec",
			"tour_destination" => "Tuyên Quang",
			"tour_day_length" => "50",
			"tour_night_length" => "60",
			"tour_start_date" => "May 11, 2022",
			"tour_detail" => "nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus odio, auctor vitae, aliquet",
			"tour_description" => "non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim.",
			"tour_slots" => "14",
			"tour_slots_left" => "39",
			"tour_prices" => "1,154 vnd",
			"tour_place" => "Bến Tre",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "37",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "risus. Nulla eget metus eu erat semper rutrum.",
			"tour_title" => "Integer vitae nibh. Donec est mauris,",
			"tour_destination" => "Sóc Trăng",
			"tour_day_length" => "42",
			"tour_night_length" => "67",
			"tour_start_date" => "May 30, 2022",
			"tour_detail" => "sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget,",
			"tour_description" => "dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis,",
			"tour_slots" => "17",
			"tour_slots_left" => "17",
			"tour_prices" => "1,348 vnd",
			"tour_place" => "Huế",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "38",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper",
			"tour_title" => "vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci",
			"tour_destination" => "Thanh Hóa",
			"tour_day_length" => "64",
			"tour_night_length" => "64",
			"tour_start_date" => "Mar 24, 2023",
			"tour_detail" => "Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla.",
			"tour_description" => "morbi tristique senectus et netus et malesuada fames ac turpis egestas. Fusce aliquet magna a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu.",
			"tour_slots" => "34",
			"tour_slots_left" => "10",
			"tour_prices" => "1,468 vnd",
			"tour_place" => "Bạc Liêu",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "39",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "Donec egestas. Aliquam nec enim.",
			"tour_title" => "Praesent interdum ligula eu enim. Etiam",
			"tour_destination" => "Bắc Kạn",
			"tour_day_length" => "46",
			"tour_night_length" => "58",
			"tour_start_date" => "May 15, 2022",
			"tour_detail" => "ornare, libero at auctor ullamcorper, nisl arcu iaculis enim, sit amet ornare lectus justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget,",
			"tour_description" => "erat volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla",
			"tour_slots" => "16",
			"tour_slots_left" => "14",
			"tour_prices" => "1,195 vnd",
			"tour_place" => "Lạng Sơn",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "40",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "iaculis enim, sit amet ornare lectus justo eu arcu.",
			"tour_title" => "Nullam scelerisque neque sed sem",
			"tour_destination" => "Quảng Ngãi",
			"tour_day_length" => "38",
			"tour_night_length" => "55",
			"tour_start_date" => "Mar 11, 2022",
			"tour_detail" => "Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per",
			"tour_description" => "varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla",
			"tour_slots" => "1",
			"tour_slots_left" => "17",
			"tour_prices" => "1,408 vnd",
			"tour_place" => "Huế",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "41",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "tempor augue ac ipsum. Phasellus vitae mauris sit",
			"tour_title" => "magna nec quam. Curabitur vel lectus. Cum sociis natoque",
			"tour_destination" => "Vĩnh Long",
			"tour_day_length" => "59",
			"tour_night_length" => "57",
			"tour_start_date" => "Mar 25, 2023",
			"tour_detail" => "auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis",
			"tour_description" => "Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci",
			"tour_slots" => "40",
			"tour_slots_left" => "47",
			"tour_prices" => "1,220 vnd",
			"tour_place" => "Bắc Kạn",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "42",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "sed, facilisis vitae, orci. Phasellus dapibus quam quis",
			"tour_title" => "euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate",
			"tour_destination" => "Mỹ Lộc",
			"tour_day_length" => "90",
			"tour_night_length" => "56",
			"tour_start_date" => "Dec 13, 2022",
			"tour_detail" => "sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis",
			"tour_description" => "in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare, elit elit fermentum risus, at fringilla purus mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra,",
			"tour_slots" => "25",
			"tour_slots_left" => "34",
			"tour_prices" => "1,999 vnd",
			"tour_place" => "Cà Mau",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "43",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "purus sapien, gravida non, sollicitudin a, malesuada id,",
			"tour_title" => "Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie",
			"tour_destination" => "Hà Giang",
			"tour_day_length" => "6",
			"tour_night_length" => "6",
			"tour_start_date" => "Aug 4, 2023",
			"tour_detail" => "enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu, odio.",
			"tour_description" => "risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan",
			"tour_slots" => "50",
			"tour_slots_left" => "38",
			"tour_prices" => "1,103 vnd",
			"tour_place" => "Việt Trì",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "44",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat",
			"tour_title" => "Aliquam ornare, libero at auctor ullamcorper, nisl arcu",
			"tour_destination" => "Đông Hà",
			"tour_day_length" => "69",
			"tour_night_length" => "78",
			"tour_start_date" => "Jun 27, 2022",
			"tour_detail" => "pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut,",
			"tour_description" => "ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus",
			"tour_slots" => "39",
			"tour_slots_left" => "32",
			"tour_prices" => "1,601 vnd",
			"tour_place" => "Sóc Trăng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "45",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "augue, eu tempor erat neque non quam. Pellentesque",
			"tour_title" => "neque non quam. Pellentesque habitant morbi",
			"tour_destination" => "Bắc Kạn",
			"tour_day_length" => "95",
			"tour_night_length" => "70",
			"tour_start_date" => "Feb 23, 2022",
			"tour_detail" => "et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra.",
			"tour_description" => "amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus",
			"tour_slots" => "8",
			"tour_slots_left" => "30",
			"tour_prices" => "1,635 vnd",
			"tour_place" => "Hát Lót",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "46",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat",
			"tour_title" => "dui augue eu tellus. Phasellus elit",
			"tour_destination" => "Sốp Cộp",
			"tour_day_length" => "87",
			"tour_night_length" => "74",
			"tour_start_date" => "Apr 18, 2023",
			"tour_detail" => "orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus",
			"tour_description" => "risus. Quisque libero lacus, varius et, euismod et, commodo at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque",
			"tour_slots" => "10",
			"tour_slots_left" => "41",
			"tour_prices" => "1,713 vnd",
			"tour_place" => "Vũ Thư",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "47",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed",
			"tour_title" => "Morbi quis urna. Nunc quis arcu vel quam dignissim",
			"tour_destination" => "Cao Lãnh",
			"tour_day_length" => "31",
			"tour_night_length" => "54",
			"tour_start_date" => "Mar 6, 2022",
			"tour_detail" => "quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam",
			"tour_description" => "arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies",
			"tour_slots" => "47",
			"tour_slots_left" => "42",
			"tour_prices" => "1,517 vnd",
			"tour_place" => "Phan Rang–Tháp Chàm",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "48",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum",
			"tour_title" => "nisi. Mauris nulla. Integer urna. Vivamus molestie dapibus ligula.",
			"tour_destination" => "Biên Hòa",
			"tour_day_length" => "75",
			"tour_night_length" => "1",
			"tour_start_date" => "Jul 23, 2022",
			"tour_detail" => "at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor,",
			"tour_description" => "euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare.",
			"tour_slots" => "8",
			"tour_slots_left" => "31",
			"tour_prices" => "1,342 vnd",
			"tour_place" => "Bến Tre",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "49",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "auctor ullamcorper, nisl arcu iaculis enim,",
			"tour_title" => "at, libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus",
			"tour_destination" => "Hà Tĩnh",
			"tour_day_length" => "38",
			"tour_night_length" => "57",
			"tour_start_date" => "May 17, 2022",
			"tour_detail" => "justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor,",
			"tour_description" => "semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy",
			"tour_slots" => "21",
			"tour_slots_left" => "24",
			"tour_prices" => "1,795 vnd",
			"tour_place" => "Tây Ninh",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "50",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "libero. Donec consectetuer mauris id sapien. Cras dolor",
			"tour_title" => "mauris eu elit. Nulla facilisi. Sed neque. Sed",
			"tour_destination" => "Biên Hòa",
			"tour_day_length" => "87",
			"tour_night_length" => "65",
			"tour_start_date" => "Aug 12, 2023",
			"tour_detail" => "odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper",
			"tour_description" => "magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus",
			"tour_slots" => "44",
			"tour_slots_left" => "23",
			"tour_prices" => "1,103 vnd",
			"tour_place" => "Tây Ninh",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "51",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "egestas hendrerit neque. In ornare sagittis",
			"tour_title" => "dis parturient montes, nascetur ridiculus mus. Donec",
			"tour_destination" => "Rạch Giá",
			"tour_day_length" => "64",
			"tour_night_length" => "32",
			"tour_start_date" => "Mar 8, 2023",
			"tour_detail" => "justo eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et",
			"tour_description" => "Nulla tempor augue ac ipsum. Phasellus vitae mauris sit amet lorem semper auctor. Mauris vel turpis. Aliquam",
			"tour_slots" => "29",
			"tour_slots_left" => "33",
			"tour_prices" => "1,135 vnd",
			"tour_place" => "Tam Kỳ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "52",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "magna. Phasellus dolor elit, pellentesque a, facilisis non,",
			"tour_title" => "ipsum non arcu. Vivamus sit amet risus.",
			"tour_destination" => "Yên Lạc",
			"tour_day_length" => "91",
			"tour_night_length" => "85",
			"tour_start_date" => "Apr 7, 2023",
			"tour_detail" => "luctus vulputate, nisi sem semper erat, in consectetuer ipsum nunc id enim. Curabitur massa. Vestibulum accumsan neque et nunc. Quisque",
			"tour_description" => "montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer",
			"tour_slots" => "11",
			"tour_slots_left" => "44",
			"tour_prices" => "1,325 vnd",
			"tour_place" => "Quy Nhơn",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "53",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "felis ullamcorper viverra. Maecenas iaculis",
			"tour_title" => "a, malesuada id, erat. Etiam vestibulum",
			"tour_destination" => "Hợp Hòa",
			"tour_day_length" => "47",
			"tour_night_length" => "51",
			"tour_start_date" => "Jul 19, 2022",
			"tour_detail" => "Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla",
			"tour_description" => "tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui augue eu tellus.",
			"tour_slots" => "1",
			"tour_slots_left" => "39",
			"tour_prices" => "1,261 vnd",
			"tour_place" => "Mường Lay",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "54",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "mauris. Morbi non sapien molestie orci tincidunt",
			"tour_title" => "Aliquam auctor, velit eget laoreet posuere,",
			"tour_destination" => "Lào Cai",
			"tour_day_length" => "34",
			"tour_night_length" => "33",
			"tour_start_date" => "Sep 3, 2022",
			"tour_detail" => "gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur egestas nunc sed libero. Proin sed",
			"tour_description" => "lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.",
			"tour_slots" => "19",
			"tour_slots_left" => "26",
			"tour_prices" => "1,359 vnd",
			"tour_place" => "Vĩnh Yên",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "55",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "at pretium aliquet, metus urna convallis erat,",
			"tour_title" => "eget, dictum placerat, augue. Sed molestie. Sed id",
			"tour_destination" => "Hà Tĩnh",
			"tour_day_length" => "63",
			"tour_night_length" => "26",
			"tour_start_date" => "May 21, 2023",
			"tour_detail" => "commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra ut, pharetra sed, hendrerit a, arcu. Sed et libero. Proin mi. Aliquam gravida mauris ut mi. Duis risus",
			"tour_description" => "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac",
			"tour_slots" => "5",
			"tour_slots_left" => "36",
			"tour_prices" => "1,614 vnd",
			"tour_place" => "Quảng Ngãi",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "56",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "vel, mauris. Integer sem elit, pharetra",
			"tour_title" => "eget metus eu erat semper rutrum. Fusce dolor",
			"tour_destination" => "Hà Tĩnh",
			"tour_day_length" => "47",
			"tour_night_length" => "51",
			"tour_start_date" => "Aug 14, 2022",
			"tour_detail" => "Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat",
			"tour_description" => "volutpat. Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas",
			"tour_slots" => "35",
			"tour_slots_left" => "36",
			"tour_prices" => "1,143 vnd",
			"tour_place" => "Da Lat",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "57",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "vel, convallis in, cursus et, eros. Proin",
			"tour_title" => "egestas nunc sed libero. Proin sed turpis nec mauris",
			"tour_destination" => "Thanh Hóa",
			"tour_day_length" => "85",
			"tour_night_length" => "67",
			"tour_start_date" => "Dec 26, 2021",
			"tour_detail" => "tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse",
			"tour_description" => "magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at",
			"tour_slots" => "38",
			"tour_slots_left" => "13",
			"tour_prices" => "1,947 vnd",
			"tour_place" => "Yên Bái",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "58",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "Lorem ipsum dolor sit amet, consectetuer adipiscing",
			"tour_title" => "Curabitur vel lectus. Cum sociis",
			"tour_destination" => "Quảng Ngãi",
			"tour_day_length" => "50",
			"tour_night_length" => "83",
			"tour_start_date" => "Dec 11, 2021",
			"tour_detail" => "at lacus. Quisque purus sapien, gravida non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed,",
			"tour_description" => "id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum",
			"tour_slots" => "28",
			"tour_slots_left" => "30",
			"tour_prices" => "1,417 vnd",
			"tour_place" => "Bắc Giang",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "59",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "Phasellus dapibus quam quis diam. Pellentesque habitant morbi",
			"tour_title" => "odio, auctor vitae, aliquet nec, imperdiet",
			"tour_destination" => "Quảng Ngãi",
			"tour_day_length" => "90",
			"tour_night_length" => "61",
			"tour_start_date" => "Oct 3, 2023",
			"tour_detail" => "a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis. Integer eu lacus. Quisque imperdiet, erat nonummy ultricies ornare,",
			"tour_description" => "sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa.",
			"tour_slots" => "17",
			"tour_slots_left" => "11",
			"tour_prices" => "1,351 vnd",
			"tour_place" => "Sốp Cộp",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "60",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus",
			"tour_title" => "mollis. Duis sit amet diam",
			"tour_destination" => "Bắc Giang",
			"tour_day_length" => "45",
			"tour_night_length" => "17",
			"tour_start_date" => "Jun 27, 2023",
			"tour_detail" => "Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate, risus a ultricies adipiscing, enim mi tempor",
			"tour_description" => "non, sollicitudin a, malesuada id, erat. Etiam vestibulum massa rutrum magna. Cras convallis convallis dolor. Quisque tincidunt pede ac urna. Ut tincidunt vehicula",
			"tour_slots" => "10",
			"tour_slots_left" => "14",
			"tour_prices" => "1,372 vnd",
			"tour_place" => "Tam Đường",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "61",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "turpis egestas. Fusce aliquet magna a neque.",
			"tour_title" => "metus facilisis lorem tristique aliquet. Phasellus fermentum",
			"tour_destination" => "Biên Hòa",
			"tour_day_length" => "67",
			"tour_night_length" => "37",
			"tour_start_date" => "Oct 17, 2023",
			"tour_detail" => "turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas, urna justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque",
			"tour_description" => "nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a,",
			"tour_slots" => "12",
			"tour_slots_left" => "22",
			"tour_prices" => "1,554 vnd",
			"tour_place" => "Nghĩa Lộ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "62",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "est. Nunc laoreet lectus quis massa.",
			"tour_title" => "ipsum dolor sit amet, consectetuer adipiscing elit.",
			"tour_destination" => "Cao Bằng",
			"tour_day_length" => "26",
			"tour_night_length" => "25",
			"tour_start_date" => "May 14, 2022",
			"tour_detail" => "convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales",
			"tour_description" => "Integer vulputate, risus a ultricies adipiscing, enim mi tempor lorem, eget mollis lectus pede et risus. Quisque libero",
			"tour_slots" => "48",
			"tour_slots_left" => "44",
			"tour_prices" => "1,687 vnd",
			"tour_place" => "Tuy Hòa",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "63",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean",
			"tour_title" => "non, feugiat nec, diam. Duis mi enim,",
			"tour_destination" => "Hòa Bình",
			"tour_day_length" => "6",
			"tour_night_length" => "92",
			"tour_start_date" => "Jul 13, 2023",
			"tour_detail" => "suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus. Proin nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut,",
			"tour_description" => "semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam",
			"tour_slots" => "35",
			"tour_slots_left" => "41",
			"tour_prices" => "1,621 vnd",
			"tour_place" => "Gia Nghĩa",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "64",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "faucibus ut, nulla. Cras eu tellus eu augue porttitor",
			"tour_title" => "dictum augue malesuada malesuada. Integer id magna et",
			"tour_destination" => "Cần Thơ",
			"tour_day_length" => "60",
			"tour_night_length" => "49",
			"tour_start_date" => "Sep 28, 2022",
			"tour_detail" => "ipsum cursus vestibulum. Mauris magna. Duis dignissim tempor arcu. Vestibulum ut eros non enim commodo hendrerit. Donec porttitor tellus non magna. Nam ligula elit, pretium et, rutrum non, hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et,",
			"tour_description" => "nisi a odio semper cursus. Integer mollis. Integer tincidunt aliquam arcu. Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget",
			"tour_slots" => "6",
			"tour_slots_left" => "25",
			"tour_prices" => "1,175 vnd",
			"tour_place" => "Nha Trang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "65",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "amet ultricies sem magna nec quam. Curabitur vel lectus.",
			"tour_title" => "eget lacus. Mauris non dui",
			"tour_destination" => "Vị Thanh",
			"tour_day_length" => "63",
			"tour_night_length" => "42",
			"tour_start_date" => "Dec 10, 2022",
			"tour_detail" => "Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam",
			"tour_description" => "Quisque fringilla euismod enim. Etiam gravida molestie arcu. Sed eu nibh vulputate mauris sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus rutrum, justo. Praesent luctus. Curabitur",
			"tour_slots" => "45",
			"tour_slots_left" => "23",
			"tour_prices" => "1,096 vnd",
			"tour_place" => "Lai Châu",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "66",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper",
			"tour_title" => "eu, euismod ac, fermentum vel, mauris. Integer sem elit, pharetra",
			"tour_destination" => "Sóc Trăng",
			"tour_day_length" => "56",
			"tour_night_length" => "18",
			"tour_start_date" => "Dec 28, 2022",
			"tour_detail" => "non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu,",
			"tour_description" => "in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam ac nulla. In tincidunt congue turpis. In condimentum. Donec at arcu. Vestibulum ante ipsum primis",
			"tour_slots" => "6",
			"tour_slots_left" => "18",
			"tour_prices" => "1,560 vnd",
			"tour_place" => "Vĩnh Trụ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "67",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "purus mauris a nunc. In at pede. Cras",
			"tour_title" => "urna. Vivamus molestie dapibus ligula. Aliquam erat",
			"tour_destination" => "Tuy Hòa",
			"tour_day_length" => "36",
			"tour_night_length" => "23",
			"tour_start_date" => "Jul 14, 2022",
			"tour_detail" => "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi fringilla mi lacinia mattis.",
			"tour_description" => "quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris.",
			"tour_slots" => "26",
			"tour_slots_left" => "34",
			"tour_prices" => "1,947 vnd",
			"tour_place" => "Thanh Nê",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "68",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "libero mauris, aliquam eu, accumsan sed,",
			"tour_title" => "orci. Phasellus dapibus quam quis diam. Pellentesque habitant",
			"tour_destination" => "Hồ Chí Minh City",
			"tour_day_length" => "66",
			"tour_night_length" => "11",
			"tour_start_date" => "Oct 15, 2022",
			"tour_detail" => "nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper.",
			"tour_description" => "malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in, cursus et, eros. Proin ultrices. Duis volutpat nunc sit amet metus. Aliquam erat volutpat. Nulla facilisis. Suspendisse commodo tincidunt nibh. Phasellus nulla. Integer vulputate,",
			"tour_slots" => "21",
			"tour_slots_left" => "16",
			"tour_prices" => "1,187 vnd",
			"tour_place" => "Huế",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "69",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "dolor dapibus gravida. Aliquam tincidunt,",
			"tour_title" => "aliquet, sem ut cursus luctus, ipsum leo elementum",
			"tour_destination" => "Bến Tre",
			"tour_day_length" => "12",
			"tour_night_length" => "1",
			"tour_start_date" => "Mar 8, 2022",
			"tour_detail" => "Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis",
			"tour_description" => "mauris, rhoncus id, mollis nec, cursus a, enim. Suspendisse aliquet, sem ut",
			"tour_slots" => "49",
			"tour_slots_left" => "5",
			"tour_prices" => "1,450 vnd",
			"tour_place" => "Cà Mau",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "70",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "bibendum sed, est. Nunc laoreet lectus quis massa. Mauris",
			"tour_title" => "mollis vitae, posuere at, velit. Cras",
			"tour_destination" => "Cao Bằng",
			"tour_day_length" => "16",
			"tour_night_length" => "50",
			"tour_start_date" => "Feb 1, 2022",
			"tour_detail" => "a, enim. Suspendisse aliquet, sem ut cursus luctus, ipsum leo elementum sem, vitae aliquam eros turpis non enim. Mauris quis turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla at sem",
			"tour_description" => "ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus. Donec egestas. Duis ac arcu. Nunc mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie pharetra nibh.",
			"tour_slots" => "22",
			"tour_slots_left" => "15",
			"tour_prices" => "1,191 vnd",
			"tour_place" => "Cao Bằng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "71",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "cursus et, eros. Proin ultrices. Duis",
			"tour_title" => "tristique pellentesque, tellus sem mollis dui, in",
			"tour_destination" => "Đông Hà",
			"tour_day_length" => "3",
			"tour_night_length" => "18",
			"tour_start_date" => "Dec 12, 2021",
			"tour_detail" => "ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus",
			"tour_description" => "sit amet, faucibus ut, nulla. Cras eu tellus eu augue porttitor interdum. Sed auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales",
			"tour_slots" => "33",
			"tour_slots_left" => "9",
			"tour_prices" => "1,816 vnd",
			"tour_place" => "Bắc Giang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "72",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "at risus. Nunc ac sem ut",
			"tour_title" => "cursus in, hendrerit consectetuer, cursus et, magna.",
			"tour_destination" => "Việt Trì",
			"tour_day_length" => "64",
			"tour_night_length" => "26",
			"tour_start_date" => "Jul 9, 2022",
			"tour_detail" => "sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus risus.",
			"tour_description" => "aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis a mi",
			"tour_slots" => "21",
			"tour_slots_left" => "13",
			"tour_prices" => "1,955 vnd",
			"tour_place" => "Tam Kỳ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "73",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "vitae velit egestas lacinia. Sed congue, elit",
			"tour_title" => "id enim. Curabitur massa. Vestibulum accumsan neque",
			"tour_destination" => "Đồng Hới",
			"tour_day_length" => "81",
			"tour_night_length" => "39",
			"tour_start_date" => "Oct 29, 2023",
			"tour_detail" => "justo faucibus lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque",
			"tour_description" => "velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut",
			"tour_slots" => "47",
			"tour_slots_left" => "40",
			"tour_prices" => "1,472 vnd",
			"tour_place" => "Trà Vinh",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "74",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "a felis ullamcorper viverra. Maecenas iaculis",
			"tour_title" => "ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy",
			"tour_destination" => "Bắc Giang",
			"tour_day_length" => "8",
			"tour_night_length" => "28",
			"tour_start_date" => "Dec 6, 2022",
			"tour_detail" => "auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis est, vitae sodales nisi magna sed dui. Fusce aliquam, enim nec tempus scelerisque, lorem ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean",
			"tour_description" => "lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy",
			"tour_slots" => "27",
			"tour_slots_left" => "32",
			"tour_prices" => "1,418 vnd",
			"tour_place" => "Tân An",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "75",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "Nullam enim. Sed nulla ante, iaculis nec,",
			"tour_title" => "lectus, a sollicitudin orci sem eget massa. Suspendisse eleifend.",
			"tour_destination" => "Hà Giang",
			"tour_day_length" => "62",
			"tour_night_length" => "40",
			"tour_start_date" => "Feb 5, 2023",
			"tour_detail" => "nec ligula consectetuer rhoncus. Nullam velit dui, semper et, lacinia vitae, sodales at, velit. Pellentesque ultricies dignissim lacus. Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna. Nullam lobortis quam a felis ullamcorper viverra. Maecenas",
			"tour_description" => "euismod in, dolor. Fusce feugiat. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aliquam auctor, velit",
			"tour_slots" => "46",
			"tour_slots_left" => "14",
			"tour_prices" => "1,576 vnd",
			"tour_place" => "Phúc Yên",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "76",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "lacus. Etiam bibendum fermentum metus. Aenean sed",
			"tour_title" => "In mi pede, nonummy ut, molestie in, tempus eu,",
			"tour_destination" => "Đồng Hới",
			"tour_day_length" => "67",
			"tour_night_length" => "86",
			"tour_start_date" => "Nov 4, 2022",
			"tour_detail" => "risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod enim. Etiam gravida molestie arcu.",
			"tour_description" => "natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel nisl. Quisque fringilla euismod",
			"tour_slots" => "26",
			"tour_slots_left" => "42",
			"tour_prices" => "1,434 vnd",
			"tour_place" => "Kon Tum",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "77",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus",
			"tour_title" => "porttitor eros nec tellus. Nunc lectus pede, ultrices a,",
			"tour_destination" => "Sóc Trăng",
			"tour_day_length" => "70",
			"tour_night_length" => "56",
			"tour_start_date" => "Oct 1, 2023",
			"tour_detail" => "nonummy ut, molestie in, tempus eu, ligula. Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in",
			"tour_description" => "ipsum sodales purus, in molestie tortor nibh sit amet orci. Ut sagittis lobortis mauris. Suspendisse aliquet molestie tellus. Aenean egestas hendrerit neque. In ornare sagittis felis. Donec tempor, est ac mattis semper, dui lectus rutrum",
			"tour_slots" => "46",
			"tour_slots_left" => "14",
			"tour_prices" => "1,229 vnd",
			"tour_place" => "Kon Tum",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "78",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor augue",
			"tour_title" => "Aliquam nisl. Nulla eu neque pellentesque massa",
			"tour_destination" => "Đông Hà",
			"tour_day_length" => "33",
			"tour_night_length" => "82",
			"tour_start_date" => "Oct 29, 2023",
			"tour_detail" => "arcu eu odio tristique pharetra. Quisque ac libero nec ligula consectetuer rhoncus. Nullam velit dui, semper",
			"tour_description" => "Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae",
			"tour_slots" => "24",
			"tour_slots_left" => "39",
			"tour_prices" => "1,115 vnd",
			"tour_place" => "Cần Thơ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "79",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "Nullam lobortis quam a felis ullamcorper viverra. Maecenas",
			"tour_title" => "in sodales elit erat vitae risus.",
			"tour_destination" => "Cà Mau",
			"tour_day_length" => "65",
			"tour_night_length" => "79",
			"tour_start_date" => "Apr 26, 2022",
			"tour_detail" => "arcu. Curabitur ut odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit",
			"tour_description" => "Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse ac metus vitae velit egestas lacinia. Sed congue, elit sed consequat auctor, nunc nulla vulputate dui, nec tempus mauris",
			"tour_slots" => "23",
			"tour_slots_left" => "32",
			"tour_prices" => "1,900 vnd",
			"tour_place" => "Thủ Dầu Một",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "80",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "leo. Cras vehicula aliquet libero.",
			"tour_title" => "bibendum fermentum metus. Aenean sed pede nec ante blandit",
			"tour_destination" => "Như Quỳnh",
			"tour_day_length" => "93",
			"tour_night_length" => "30",
			"tour_start_date" => "Aug 7, 2023",
			"tour_detail" => "Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat metus sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae nibh. Donec est mauris, rhoncus id, mollis nec, cursus",
			"tour_description" => "mauris a nunc. In at pede. Cras vulputate velit eu sem. Pellentesque ut ipsum ac mi eleifend egestas. Sed pharetra, felis eget varius ultrices, mauris ipsum porta elit, a",
			"tour_slots" => "21",
			"tour_slots_left" => "32",
			"tour_prices" => "1,228 vnd",
			"tour_place" => "Tuyên Quang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "81",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "nec orci. Donec nibh. Quisque nonummy ipsum",
			"tour_title" => "Cras pellentesque. Sed dictum. Proin eget odio.",
			"tour_destination" => "Nam Sách",
			"tour_day_length" => "51",
			"tour_night_length" => "99",
			"tour_start_date" => "Sep 20, 2022",
			"tour_detail" => "lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque,",
			"tour_description" => "Aenean euismod mauris eu elit. Nulla facilisi. Sed neque. Sed eget lacus. Mauris non dui nec urna suscipit nonummy. Fusce fermentum fermentum arcu. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Phasellus ornare. Fusce mollis. Duis sit amet diam eu dolor egestas rhoncus.",
			"tour_slots" => "42",
			"tour_slots_left" => "11",
			"tour_prices" => "1,644 vnd",
			"tour_place" => "Tuyên Quang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "82",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "Fusce mollis. Duis sit amet diam",
			"tour_title" => "nec mauris blandit mattis. Cras eget",
			"tour_destination" => "Huế",
			"tour_day_length" => "27",
			"tour_night_length" => "9",
			"tour_start_date" => "Feb 24, 2023",
			"tour_detail" => "Curae Donec tincidunt. Donec vitae erat vel pede blandit congue. In scelerisque scelerisque dui. Suspendisse",
			"tour_description" => "mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras interdum. Nunc sollicitudin commodo ipsum. Suspendisse non leo. Vivamus nibh dolor, nonummy ac, feugiat non, lobortis quis, pede. Suspendisse dui. Fusce diam nunc, ullamcorper eu, euismod ac,",
			"tour_slots" => "12",
			"tour_slots_left" => "9",
			"tour_prices" => "1,385 vnd",
			"tour_place" => "Hà Nội",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "83",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "mauris. Morbi non sapien molestie orci tincidunt adipiscing. Mauris molestie",
			"tour_title" => "magna a neque. Nullam ut nisi a odio semper",
			"tour_destination" => "Than Uyên",
			"tour_day_length" => "19",
			"tour_night_length" => "41",
			"tour_start_date" => "Aug 25, 2023",
			"tour_detail" => "aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing",
			"tour_description" => "ac mattis semper, dui lectus rutrum urna, nec luctus felis purus ac tellus. Suspendisse sed dolor. Fusce mi lorem, vehicula et, rutrum eu, ultrices sit amet, risus. Donec nibh enim, gravida sit amet, dapibus id, blandit at, nisi. Cum sociis natoque",
			"tour_slots" => "45",
			"tour_slots_left" => "41",
			"tour_prices" => "1,116 vnd",
			"tour_place" => "Ninh Bình",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "84",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "Cras dictum ultricies ligula. Nullam enim. Sed nulla",
			"tour_title" => "Nunc lectus pede, ultrices a, auctor non, feugiat",
			"tour_destination" => "Bắc Giang",
			"tour_day_length" => "3",
			"tour_night_length" => "73",
			"tour_start_date" => "Jun 19, 2023",
			"tour_detail" => "sagittis placerat. Cras dictum ultricies ligula. Nullam enim. Sed nulla ante, iaculis nec, eleifend non, dapibus",
			"tour_description" => "auctor odio a purus. Duis elementum, dui quis accumsan convallis, ante lectus convallis",
			"tour_slots" => "31",
			"tour_slots_left" => "5",
			"tour_prices" => "1,484 vnd",
			"tour_place" => "Sóc Trăng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "85",
			"tour_tour_operator_serial" => "9",
			"tour_name" => "nibh. Donec est mauris, rhoncus id,",
			"tour_title" => "sagittis. Nullam vitae diam. Proin",
			"tour_destination" => "Thanh Hóa",
			"tour_day_length" => "51",
			"tour_night_length" => "14",
			"tour_start_date" => "Nov 14, 2023",
			"tour_detail" => "placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl.",
			"tour_description" => "massa. Suspendisse eleifend. Cras sed leo. Cras vehicula aliquet libero. Integer in magna. Phasellus dolor elit, pellentesque a, facilisis non, bibendum sed, est. Nunc laoreet lectus quis massa. Mauris vestibulum, neque sed dictum eleifend, nunc risus varius orci, in consequat enim diam vel arcu. Curabitur ut odio vel est",
			"tour_slots" => "18",
			"tour_slots_left" => "25",
			"tour_prices" => "1,689 vnd",
			"tour_place" => "Thủ Dầu Một",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "86",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "lorem vitae odio sagittis semper. Nam",
			"tour_title" => "tincidunt, neque vitae semper egestas, urna justo",
			"tour_destination" => "Thủ Dầu Một",
			"tour_day_length" => "94",
			"tour_night_length" => "19",
			"tour_start_date" => "Mar 23, 2022",
			"tour_detail" => "ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non, egestas a, dui. Cras pellentesque. Sed dictum. Proin eget odio. Aliquam vulputate ullamcorper magna. Sed eu eros. Nam consequat dolor vitae dolor. Donec fringilla. Donec feugiat",
			"tour_description" => "nec tempus mauris erat eget ipsum. Suspendisse sagittis. Nullam vitae diam. Proin dolor. Nulla semper tellus id nunc interdum feugiat. Sed nec metus facilisis lorem tristique aliquet. Phasellus fermentum convallis ligula. Donec luctus aliquet odio. Etiam ligula tortor, dictum eu,",
			"tour_slots" => "25",
			"tour_slots_left" => "13",
			"tour_prices" => "1,005 vnd",
			"tour_place" => "Thủ Dầu Một",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "87",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "Nulla interdum. Curabitur dictum. Phasellus in felis. Nulla tempor",
			"tour_title" => "fermentum arcu. Vestibulum ante ipsum primis in faucibus",
			"tour_destination" => "Vĩnh Long",
			"tour_day_length" => "9",
			"tour_night_length" => "52",
			"tour_start_date" => "Oct 29, 2022",
			"tour_detail" => "sit amet ante. Vivamus non lorem vitae odio sagittis semper. Nam tempor diam dictum sapien. Aenean massa. Integer vitae",
			"tour_description" => "parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur",
			"tour_slots" => "28",
			"tour_slots_left" => "6",
			"tour_prices" => "1,588 vnd",
			"tour_place" => "Cao Bằng",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "88",
			"tour_tour_operator_serial" => "7",
			"tour_name" => "non massa non ante bibendum ullamcorper. Duis cursus, diam",
			"tour_title" => "natoque penatibus et magnis dis parturient",
			"tour_destination" => "Vũ Thư",
			"tour_day_length" => "82",
			"tour_night_length" => "43",
			"tour_start_date" => "Nov 18, 2022",
			"tour_detail" => "fringilla ornare placerat, orci lacus vestibulum lorem, sit amet ultricies sem magna nec quam. Curabitur vel lectus. Cum sociis natoque penatibus et magnis dis",
			"tour_description" => "Nam interdum enim non nisi. Aenean eget metus. In nec orci. Donec nibh. Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam nec enim. Nunc ut erat. Sed nunc est, mollis non, cursus non,",
			"tour_slots" => "26",
			"tour_slots_left" => "12",
			"tour_prices" => "1,522 vnd",
			"tour_place" => "Yên Mỹ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "89",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "vitae, erat. Vivamus nisi. Mauris nulla. Integer",
			"tour_title" => "libero. Morbi accumsan laoreet ipsum. Curabitur consequat, lectus",
			"tour_destination" => "Long Xuyên",
			"tour_day_length" => "72",
			"tour_night_length" => "37",
			"tour_start_date" => "Mar 15, 2023",
			"tour_detail" => "eu arcu. Morbi sit amet massa. Quisque porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur",
			"tour_description" => "Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est",
			"tour_slots" => "25",
			"tour_slots_left" => "42",
			"tour_prices" => "1,137 vnd",
			"tour_place" => "Biên Hòa",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "90",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "adipiscing. Mauris molestie pharetra nibh. Aliquam",
			"tour_title" => "at, nisi. Cum sociis natoque penatibus et",
			"tour_destination" => "Hạ Long",
			"tour_day_length" => "52",
			"tour_night_length" => "99",
			"tour_start_date" => "Nov 28, 2021",
			"tour_detail" => "posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id risus quis diam luctus lobortis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet",
			"tour_description" => "mollis. Phasellus libero mauris, aliquam eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus",
			"tour_slots" => "7",
			"tour_slots_left" => "7",
			"tour_prices" => "1,702 vnd",
			"tour_place" => "Tân An",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "91",
			"tour_tour_operator_serial" => "10",
			"tour_name" => "vel arcu. Curabitur ut odio vel est",
			"tour_title" => "eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed",
			"tour_destination" => "Bình Mỹ",
			"tour_day_length" => "35",
			"tour_night_length" => "31",
			"tour_start_date" => "Jul 8, 2023",
			"tour_detail" => "ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque vitae semper egestas,",
			"tour_description" => "Nulla dignissim. Maecenas ornare egestas ligula. Nullam feugiat placerat velit. Quisque varius. Nam porttitor scelerisque neque. Nullam nisl. Maecenas malesuada fringilla est. Mauris eu turpis. Nulla aliquet. Proin velit. Sed malesuada augue ut lacus. Nulla tincidunt, neque",
			"tour_slots" => "7",
			"tour_slots_left" => "21",
			"tour_prices" => "1,270 vnd",
			"tour_place" => "Gia Nghĩa",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "92",
			"tour_tour_operator_serial" => "5",
			"tour_name" => "eu, ligula. Aenean euismod mauris eu elit. Nulla",
			"tour_title" => "pellentesque eget, dictum placerat, augue. Sed molestie. Sed",
			"tour_destination" => "Kon Tum",
			"tour_day_length" => "83",
			"tour_night_length" => "34",
			"tour_start_date" => "Oct 14, 2022",
			"tour_detail" => "odio vel est tempor bibendum. Donec felis orci, adipiscing non, luctus sit amet, faucibus ut, nulla. Cras eu tellus",
			"tour_description" => "urna. Ut tincidunt vehicula risus. Nulla eget metus eu erat semper rutrum. Fusce dolor quam, elementum at, egestas a, scelerisque sed, sapien. Nunc pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque mollis. Phasellus libero mauris, aliquam eu, accumsan sed,",
			"tour_slots" => "29",
			"tour_slots_left" => "39",
			"tour_prices" => "1,226 vnd",
			"tour_place" => "Rạch Giá",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "93",
			"tour_tour_operator_serial" => "4",
			"tour_name" => "Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.",
			"tour_title" => "magna. Praesent interdum ligula eu enim.",
			"tour_destination" => "Cần Thơ",
			"tour_day_length" => "51",
			"tour_night_length" => "53",
			"tour_start_date" => "Oct 12, 2022",
			"tour_detail" => "porttitor eros nec tellus. Nunc lectus pede, ultrices a, auctor non, feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes,",
			"tour_description" => "varius ultrices, mauris ipsum porta elit, a feugiat tellus lorem eu metus. In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede sagittis augue, eu tempor erat",
			"tour_slots" => "33",
			"tour_slots_left" => "13",
			"tour_prices" => "1,080 vnd",
			"tour_place" => "Hạ Long",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "94",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "Cras eget nisi dictum augue malesuada",
			"tour_title" => "eu, accumsan sed, facilisis vitae, orci. Phasellus dapibus quam quis",
			"tour_destination" => "Sóc Trăng",
			"tour_day_length" => "84",
			"tour_night_length" => "1",
			"tour_start_date" => "Sep 10, 2022",
			"tour_detail" => "gravida sagittis. Duis gravida. Praesent eu nulla at sem molestie sodales. Mauris blandit enim consequat purus. Maecenas libero est, congue a, aliquet vel, vulputate eu,",
			"tour_description" => "lacus pede sagittis augue, eu tempor erat neque non quam. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Aliquam fringilla cursus purus. Nullam scelerisque neque sed sem egestas blandit. Nam nulla magna, malesuada vel, convallis in,",
			"tour_slots" => "26",
			"tour_slots_left" => "21",
			"tour_prices" => "1,376 vnd",
			"tour_place" => "Đồng Hới",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "95",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "Quisque tincidunt pede ac urna. Ut tincidunt vehicula risus.",
			"tour_title" => "dictum magna. Ut tincidunt orci quis lectus.",
			"tour_destination" => "Nha Trang",
			"tour_day_length" => "85",
			"tour_night_length" => "30",
			"tour_start_date" => "Aug 20, 2022",
			"tour_detail" => "feugiat nec, diam. Duis mi enim, condimentum eget, volutpat ornare, facilisis eget, ipsum. Donec sollicitudin adipiscing ligula. Aenean gravida nunc sed pede. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vel arcu eu odio tristique pharetra. Quisque ac libero nec ligula",
			"tour_description" => "et magnis dis parturient montes, nascetur ridiculus mus. Aenean eget magna. Suspendisse tristique neque venenatis lacus. Etiam bibendum fermentum metus. Aenean sed pede nec ante blandit viverra. Donec tempus, lorem fringilla ornare placerat, orci lacus vestibulum",
			"tour_slots" => "39",
			"tour_slots_left" => "4",
			"tour_prices" => "1,115 vnd",
			"tour_place" => "Cần Thơ",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "96",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "velit. Sed malesuada augue ut",
			"tour_title" => "sit amet massa. Quisque porttitor eros nec",
			"tour_destination" => "Cao Lãnh",
			"tour_day_length" => "65",
			"tour_night_length" => "20",
			"tour_start_date" => "Jul 6, 2022",
			"tour_detail" => "Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos hymenaeos. Mauris ut quam vel sapien imperdiet ornare. In faucibus. Morbi vehicula. Pellentesque tincidunt tempus",
			"tour_description" => "hendrerit id, ante. Nunc mauris sapien, cursus in, hendrerit consectetuer, cursus et, magna. Praesent interdum ligula eu enim. Etiam imperdiet dictum magna. Ut tincidunt orci quis lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non",
			"tour_slots" => "19",
			"tour_slots_left" => "31",
			"tour_prices" => "1,427 vnd",
			"tour_place" => "Quảng Ngãi",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "97",
			"tour_tour_operator_serial" => "3",
			"tour_name" => "ut, pellentesque eget, dictum placerat,",
			"tour_title" => "orci. Ut semper pretium neque. Morbi quis",
			"tour_destination" => "Tân An",
			"tour_day_length" => "91",
			"tour_night_length" => "55",
			"tour_start_date" => "Oct 19, 2022",
			"tour_detail" => "lectus. Nullam suscipit, est ac facilisis facilisis, magna tellus faucibus leo, in lobortis tellus justo sit amet nulla. Donec non justo. Proin non massa non ante bibendum ullamcorper. Duis cursus, diam at pretium aliquet, metus urna convallis erat, eget tincidunt dui",
			"tour_description" => "a neque. Nullam ut nisi a odio semper cursus. Integer mollis. Integer tincidunt",
			"tour_slots" => "21",
			"tour_slots_left" => "17",
			"tour_prices" => "1,594 vnd",
			"tour_place" => "Thái Bình",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "98",
			"tour_tour_operator_serial" => "8",
			"tour_name" => "semper et, lacinia vitae, sodales at, velit. Pellentesque",
			"tour_title" => "lectus rutrum urna, nec luctus felis",
			"tour_destination" => "Hồ Chí Minh City",
			"tour_day_length" => "99",
			"tour_night_length" => "28",
			"tour_start_date" => "Dec 3, 2021",
			"tour_detail" => "Quisque nonummy ipsum non arcu. Vivamus sit amet risus. Donec egestas. Aliquam",
			"tour_description" => "tortor at risus. Nunc ac sem ut dolor dapibus gravida. Aliquam tincidunt, nunc ac mattis ornare, lectus ante dictum mi, ac mattis velit justo nec ante. Maecenas mi felis, adipiscing fringilla, porttitor vulputate, posuere vulputate, lacus. Cras",
			"tour_slots" => "47",
			"tour_slots_left" => "17",
			"tour_prices" => "1,406 vnd",
			"tour_place" => "Nha Trang",
			"tour_is_verify" => "Yes"
		],
		[
			"serial" => "99",
			"tour_tour_operator_serial" => "2",
			"tour_name" => "nisi. Cum sociis natoque penatibus et magnis dis parturient montes,",
			"tour_title" => "vestibulum nec, euismod in, dolor. Fusce feugiat. Lorem ipsum",
			"tour_destination" => "Long Xuyên",
			"tour_day_length" => "61",
			"tour_night_length" => "34",
			"tour_start_date" => "Dec 19, 2021",
			"tour_detail" => "ligula tortor, dictum eu, placerat eget, venenatis a, magna. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat vitae risus. Duis",
			"tour_description" => "nisl sem, consequat nec, mollis vitae, posuere at, velit. Cras lorem lorem, luctus ut, pellentesque eget, dictum placerat, augue. Sed molestie. Sed id",
			"tour_slots" => "50",
			"tour_slots_left" => "39",
			"tour_prices" => "1,311 vnd",
			"tour_place" => "Tuy Hòa",
			"tour_is_verify" => "No"
		],
		[
			"serial" => "100",
			"tour_tour_operator_serial" => "6",
			"tour_name" => "ultrices posuere cubilia Curae Donec tincidunt.",
			"tour_title" => "neque sed sem egestas blandit. Nam nulla magna,",
			"tour_destination" => "Cà Mau",
			"tour_day_length" => "12",
			"tour_night_length" => "30",
			"tour_start_date" => "Jan 10, 2023",
			"tour_detail" => "nascetur ridiculus mus. Donec dignissim magna a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis",
			"tour_description" => "a tortor. Nunc commodo auctor velit. Aliquam nisl. Nulla eu neque pellentesque massa lobortis ultrices. Vivamus rhoncus. Donec est. Nunc ullamcorper, velit in aliquet lobortis, nisi nibh lacinia orci, consectetuer euismod est arcu ac orci. Ut semper pretium neque. Morbi quis urna. Nunc quis arcu vel quam dignissim pharetra. Nam",
			"tour_slots" => "8",
			"tour_slots_left" => "9",
			"tour_prices" => "1,747 vnd",
			"tour_place" => "Hạ Long",
			"tour_is_verify" => "Yes"
		]
	];

	/**
	 * Return all tours of a tour operator
	 * 
	 * @return Response
	 */
	public function getAllTours($id)
	{
		$tours = array_filter($this->data, function ($tour) use ($id) {
			return $tour['tour_tour_operator_serial'] == $id;
		});

		// $tours = $this->data;

		return view('tour-operator.tours', [
			'id' => $id,
			'tours' => $tours
		]);
	}

	/**
	 * Return single tour of a specific tour operator
	 * 
	 * @return Response
	 */
	public function getTour($id, $tourId)
	{
		// $data = array_filter($this->data, function($tour) use ($id, $tourId) {
		// 	return $tour['serial'] == $tourId;
		// });
		$res = null;

		foreach ($this->data as $tour) {
			if ($tour['serial'] == $tourId) {
				$res = $tour;
				break;
			}
		}

		// dd($res);

		$res['tour_start_date'] = date("d/m/Y", strtotime($res['tour_start_date']));


		return view('tour-operator.tour', [
			'tour' => $res
		]);
	}

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$tourOperators = TourOperator::all();

		return view('tour-operator.index', [
			'tourOperators' => $tourOperators,
		]);
	}

	public function list(Request $request)
	{
		$tourOperators = TourOperator::with(['userTourist']);
		if ($request->input('name') !== null) {
			$tourOperators->where('tourist_name', 'LIKE', '%' . $request->input('name') . '%');
		}
		$tourOperators = $tourOperators->get();

		return view('tour-operator.index', [
			'tourOperators' => $tourOperators,
		]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('tour-operator.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		//if (!Auth::user()->can('companies_management')) {
		//    abort(403);
		//}
		$request->validate([
			'name'         => 'required|min:2|max:64',
			'phone_number' => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
			'tax_number'   => 'nullable|string',
			'address'      => 'nullable|string',
			'description'  => 'nullable|string',
		]);
		$user                             = auth()->user();
		$item                             = new TourOperator();
		$item->tour_operator_name         = $request->input('name');
		$item->tour_operator_tax_number   = $request->input('tax_number');
		$item->tour_operator_phone_number = $request->input('phone_number');
		$item->tour_operator_address      = $request->input('address');
		$item->tour_operator_description  = $request->input('description');
		$item->tour_operator_user_serial  = $user->id;
		$item->save();
		$request->session()->flash('message', 'Successfully created');

		return redirect('/');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$operator = TourOperator::find($id);

		return view('tour-operator.detail', ['tourOperator' => $operator]);
	}

	public function showProfile()
	{

		$operator = TourOperator::where('tour_operator_user_serial', auth()->user()->id)->first();

		return view('tour-operator.detail', ['tourOperator' => $operator]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		//if (!Auth::user()->can('companies_management')) {
		//    abort(403);
		//}
		$tourOperator = TourOperator::find($id);

		return view('tour-operator.edit', ['tour-operator' => $tourOperator]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param Request $request
	 * @param int $id
	 *
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'tourist_name' => 'required|min:2|max:64',
			'dob'          => 'nullable|string',
			'address'      => 'nullable|string|max:100',
			'phone_number' => 'nullable|string|max:10',
			'personal_id'  => 'nullable|regex:/^([0-9\s\-\+\(\)]*)$/|min:9|max:15',
		]);
		$item = TourOperator::find($id);
		if ($item) {
			$item->tour_operator_name         = $request->input('name');
			$item->tour_operator_tax_number   = $request->input('tax_number');
			$item->tour_operator_phone_number = $request->input('phone_number');
			$item->tour_operator_address      = $request->input('address');
			$item->tour_operator_description  = $request->input('description');
			$item->save();
			$request->session()->flash('message', 'Successfully edited');

			return redirect()->route('tour-operator.show', [$id => $id]);
		} else {
			return back()->withInput()->withErrors(['msg', 'Can\'t update tour']);
		}
	}

	public function editOwnProfile()
	{
		$user = Auth::user();
		$item = TourOperator::where('tour_operator_user_serial', $user->id)->first();

		return view('tour-operator.edit', ['tourOperator' => $item]);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$item = TourOperator::find($id);
		if ($item) {
			$item->delete();
		}

		return redirect()->route('tour-operator.index');
	}
}
