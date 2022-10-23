<?php

use App\Models\Tourist;
use App\Models\TourOperator;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run() {
		$user           = new User();
		$user->username = "admin";
		$user->email    = "admin@gmail.com";
		$user->password = Hash::make( "secret" );
		$user->assignRole( 'admin' );
		$user->save();

		$address = ['124 Dien Bien Phu Street. Dakao Ward, District 1, HCM City', 'No.52, Group 10, Cau Dien town, HaNoi','120 Hang Trong Street, HaNoi',
			'41 Phan Dinh Phung Street, NamDinh city','168 Le Duan Street, Hai Chau District, DaNang', '125/208 Luong The Vinh Street, Ho Chi Minh City',
			' Floor 6, 100 Dien Bien Phu St.,Ho Chi Minh City','Tan Hoa Ward, Buon Ma Thuot City','Guoman Hotel, 83A Ly Thuong Kiet Street, HaNoi',' 15C Le Ngoc Han, QuangNam'];
		$phones = ['038516595','038600261','03856078','09350390','03823187','08472625','08359219','0859093','09137006','03882236'];
		$dob = ['1963-10-31','1966-06-14','1970-06-19','1987-05-29','1991-05-24', '1962-02-19','1968-01-25','1975-08-28','1977-09-06','1989-01-31'];
		for ( $i = 0; $i < 10; $i ++ ) {
			$tourist           = new User();
			$tourist->username = "tourist" . $i;
			$tourist->email    = "tourist" . $i . "@gmail.com";
			$tourist->password = Hash::make( "secret" );
			$tourist->syncRoles( 'tourist' );
			$tourist->save();

			$item = new Tourist();
			$item->user_serial = $tourist->id;
			$item->tourist_name = "tourist " . $i;;
			$item->address = $address[$i];
			$item->date_of_birth = $dob[$i];
			$item->tourist_phone_number = $phones[$i];
			$item->tourist_personal_id = rand(100000000000,999999999999);
			$item->save();
		}

		for ( $i = 0; $i < 10; $i ++ ) {
			$tourOperator           = new User();
			$tourOperator->username = "operator" . $i;
			$tourOperator->email    = "operator" . $i . "@gmail.com";
			$tourOperator->password = Hash::make( "secret" );
			$tourOperator->assignRole( 'tour-operator' );
			$tourOperator->save();

			$item = new TourOperator();
			$item->tour_operator_user_serial= $tourOperator->id;
			$item->tour_operator_name= "operator " . $i;
			$item->tour_operator_phone_number= $phones[$i];
			$item->tour_operator_bank_account=  rand(100000000000,999999999999);
			$item->tour_operator_tax_number=  rand(100000000000,999999999999);
			$item->tour_operator_address=  $address[$i];
			$item->tour_operator_description=  "This is operator " . $i;;

			$item->save();
		}
	}
}