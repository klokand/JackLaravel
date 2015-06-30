class PageInforSeeder extends Seeder{
	public function run(){
		DB::table('page_infors')->insert(array([
			'company_Name'=>'Company Name',
			'what_we_do'=>'Company Name is operated by a team of over 400 staff nationwide and growing all the time. Our aim is to provide the most useful and helpful service possible and to lower the cost of good stuff inport into Australia.',
			'about_us'=>'text text text text text text text text text text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text texttext text text text text text text text.',
			'strength_1'=>'text texttext text text text textext texttext text text text textext texttext text text text textext texttext text text text tex.',
			'strength_2'=>'text texttext text text text textext texttext text text text textext texttext text text text textext texttext text text text tex.',
			'strength_3'=>'text texttext text text text textext texttext text text text textext texttext text text text textext texttext text text text tex.',
			'service_1'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'service_2'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'service_3'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'service_4'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'service_5'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'service_6'=>'text text textextxt text text textextxt text text textextxt text text textextxt text text textextxt text text textext.',
			'post_address'=>'post address',
			'email_address'=>'email@email',
			'phone_number'=>'061-888888'
		]));
	}
}