<?const ITALY_PHOTO = 'https://ssl.tzoo-img.com/images/tzoo.1.0.567849.C-Vacations-Italy-GettyImages-543346423.jpg?width=1080';
const FRANCE_PHOTO = 'https://www.centralholidays.com/MyUpload/021220202059110WhenInParis850x530_1.jpg';
const PORTUGAL_PHOTO = 'https://www.ataratwersky.com/wp-content/uploads/2021/01/Portugal-Header-2.jpg';
const OFFER_STICKER ='https://www.academyofclinicalmassage.com/wp-content/uploads/2015/01/special-summer-offer-turqoise.png';
const ITALY_DESCRIPTION = "With its millennia-spanning history, comforting regional cuisine, and countless artistic treasures, it’s no wonder Italy consistently ranks at the top of travelers' wish lists. Venice romances visitors with its sprawling, Baroque palaces and maze of winding canals. Florence, the Tuscan capital, wins hearts with its Renaissance architecture and art. And Rome dazzles with its ever-present history, from the hulking Colosseum to the Forum’s still-stately remains. Want to soak up even more of Italy’s epic history and endless charm? Extend your tour and continue south to the well-preserved ruins of Pompeii and the coastal city of Sorrento, where la dolce vita is embraced to the nth degree.";
const FRANCE_DESCRIPTION = "France is home to some of the most lively cities, bucolic villages and renowned wine regions on the globe. U.S. News considered factors like variety of attractions, lodging, weather and culinary scenes to create this ranking of the best places to visit in France. Whether you're seeking an action-packed sightseeing adventure or a relaxing wine retreat, you'll find a fun French vacation here. To influence next year's ranking, vote below for your favorite destinations in France.";
const PORTUGAL_DESCRIPTION = "Experience beautiful Portugal through two of its most popular destinations!. Begin your vacation in Lisbon (the dazzling capital with an ancient fortress at its heart with charming neighborhoods, local festivals, nightlife, and delectable food) and then, take a train to Porto (the former residence of the Royal Family; visit medieval cathedrals, concert halls, the national library and museums with breathtaking art treasures and porto wines!). This is a flexible vacation package. Select your number of nights in each city, desired hotel and activities.";

$tours= [
[
    'name' =>'Vacation in Italy',
    'photo' =>  ITALY_PHOTO,
    'duration' => [
        'quantity' => 5,
        'definition' =>'days'
    ],
    'description' => ITALY_DESCRIPTION,
    'offer' => false,
    'price' => [
       'amount' => 900,
       'currency' => 'EUR',
        ]
],

[
    'name' =>'Vacation in France',
    'photo' => FRANCE_PHOTO,
    'duration' => [
        'quantity' => 10,
        'definition' => 'days'
    ],
    'description' => FRANCE_DESCRIPTION,
    'offer' => true,
    'price' => [
       'amount' => 1200,
       'currency' => 'EUR',
        ]
],

[
    'name' =>'Vacation in Portugal',
    'photo' => PORTUGAL_PHOTO,
    'duration' => [
        'quantity' => 7,
        'definition' => 'days'
    ],
'description' => PORTUGAL_DESCRIPTION,
    'offer' => false,
    'price' => [
       'amount' => 1100,
       'currency' => 'EUR',
    ]
],

];