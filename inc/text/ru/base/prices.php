<?$text['prices'] = [
	'title' => 'Цены',
	'sale'  => 7,
	'content' => [
		[
			'title' => 'Для физических лиц',
			'text'  => 'скидка 30% до ',
			'cost'  => [
				'old'      => '11 000',
				'new'      => '8 200',
				'currency' => 'р.'
			]
		],
		[
			'title' => 'Для юридических лиц',
			'text'  => 'скидка 30% до ',
			'cost'  => [
				'old'      => '11 500',
				'new'      => '8 600',
				'currency' => 'р.'
			]
		]
	],
	'calc' => [
		'title'  => 'Расчёт цены в',
		'select' => [
			[
				'value' => 'pizza',
				'price' => '12',
				'text'  => 'пиццах'
			],
			[
				'value' => 'metro',
				'price' => '264',
				'text'  => 'жетонах метро'
			],
			[
				'value' => 'coffee',
				'price' => '54',
				'text'  => 'стаканах кофе'
			],
			[
				'value' => 'cinema',
				'price' => '13',
				'text'  => 'походов в кино'
			]
		]
	],
	'sales' => [
		[
			'sale' => 'Скидка 5%',
			'text' => 'при 100% оплате курса'
		],
		[
			'sale' => 'Скидка 10%',
			'text' => 'при записи на курс при записи на курс SEO и курс <a href="adwords.php" title="курс Google AdWords">Google AdWords</a> или <a href="direct.php" title="курс Google AdWords">Yandex Директ</a>'
		],
		[
			'sale' => 'Скидка 15%',
			'text' => 'при записи на курс SEO и <a href="ppc.php" title="курс контекстной рекламы">контекстной рекламы</a>'
		]
	]
];