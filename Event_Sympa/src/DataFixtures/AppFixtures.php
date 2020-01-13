<?php

namespace App\DataFixtures;

use App\Entity\Place;
use App\Entity\Event;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        //Place attributes
        $placeNamePlace=array('Zenith de Paris','Zenith de Rouen','Zenith d\'Orléans',
            'Théatre Municipal de Chartres','Théâtre Mogador',
            'Parc des princes','Bataclan','Olympia',
            'Cirque d\'hiver','Palais des festivals et des congrès de Cannes',
            'Centre Pompidou','Arène de Nimes','Astrolabe',
            'Espace Encan','Le Dôme','Espace Gerson',
            'Arkéa Arena','Le Spotlight','Théatre Sébastopol',
            'Salle des fêtes de la Bourse','Place de Loire');
        $adressPlace=array('211 Avenue Jean Jaurès','44 Avenue des Canadiens',
            '1 Rue du Président Robert Schuman',
            'Place de Ravenne','25 Rue de Mogador',
            '24 Rue du Commandant Guilbaud','50 Boulevard Voltaire',
            '28 Boulevard des Capucines','110 Rue Amelot',
            '1 Boulevard de la Croisette','Place Georges-Pompidou',
            'Boulevard des Arènes','Boulevard des Arènes',
            'Quai Louis Prunier','48 Avenue de Saint-Just',
            '1 Place Gerson','48-50 Avenue Jean Alfonséa',
            '100 Rue Léon Gambetta','Place Sébastopol',
            '1 Place du Maréchal de Lattre de Tassigny','Place de Loire');
        $postalCodePlace=array(75019,76120,45100,75009,
            75016,75011,75009,75011,06400,75004,30000,
            30000,17033,13004,69005,33270,59800,59000,
            67000,45000,00000);
        $cityPlace=array('Paris','Rouen','Orléans',
            'Chartres','Paris','Paris','Paris','Paris',
            'Paris','Cannes','Paris','Nîmes',
            'Nîmes','La Rochelle','Marseille',
            'Floirac','Lille','Lille','Strasbourg','Orléans','None');
        $nbPlace=count($placeNamePlace);

        //Event attributes
        $titleEvent=array('Cirque de la nuit','VALD','Sting',
            'Fête de la choucroute','La Grand Brocante de Noël',
            'Un diner de con');
        $descriptionEvent=array('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit libero, mattis malesuada leo ut, condimentum iaculis erat. Nunc scelerisque magna in eros interdum,
             convallis convallis nibh egestas. Fusce ipsum enim, dignissim sed pharetra in, egestas non lectus. In elit leo, tincidunt et feugiat sed, auctor non elit. Class aptent taciti sociosqu ad 
            litora torquent per conubia nostra, per inceptos himenaeos. Nulla eu justo elit. Sed ullamcorper convallis erat, in pretium arcu congue nec. Aliquam ut gravida arcu. ',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu scelerisque odio. Maecenas vitae placerat felis, sed volutpat velit. Vivamus dignissim purus vitae 
            sapien faucibus, cursus ultricies arcu fermentum. Donec in finibus risus. Cras in bibendum ex. Nam eleifend neque non massa porttitor, sed finibus quam molestie. Maecenas 
            ut eros in metus ornare rhoncus. Fusce dictum consequat dui, sit amet blandit massa molestie a. Vivamus quis dignissim est, eget convallis velit. Fusce rutrum lectus ut nulla mattis,
             sed dignissim felis ullamcorper. Duis maximus turpis eu enim semper sagittis. Nullam ligula mi, blandit non dui ac, ultrices pulvinar nibh.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque bibendum tellus non tellus pulvinar, nec pulvinar nulla eleifend. Sed mattis malesuada tincidunt. Sed eu ornare 
            turpis, id tincidunt quam. In hac habitasse platea dictumst. Curabitur placerat ultrices quam vel aliquet. In vestibulum, magna vel commodo varius, purus neque pharetra ligula, id auctor 
            ipsum dui id diam. Sed rutrum turpis ut elit commodo semper. Morbi eu nisi tortor. Praesent malesuada nibh et erat pulvinar faucibus et vel ipsum. Quisque consequat nisl ac venenatis vulputate.
             Ut rhoncus est eu nibh ullamcorper, eget rutrum arcu venenatis. Quisque a laoreet arcu, at ultricies augue. Nunc non mi justo. Duis faucibus, ante id consectetur malesuada, nisl enim viverra
              sapien, id tincidunt felis ligula sed purus.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac auctor elit. Etiam malesuada ut nisi ac feugiat. Phasellus quis dolor non urna euismod vehicula. Pellentesque auctor maximus ante
             sed aliquet. Quisque tempus viverra arcu a ullamcorper. Vestibulum maximus gravida accumsan. Praesent bibendum feugiat enim non varius. Nam nec eros justo. Suspendisse vestibulum efficitur est,
              vel commodo purus interdum in. Pellentesque ac gravida augue.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu aliquam purus. Etiam neque est, hendrerit ac pretium quis, aliquam id diam. Proin id convallis ligula. Curabitur luctus hendrerit
             lectus, a faucibus velit egestas eget. Aenean nec placerat sem, nec dictum purus. Mauris pharetra euismod arcu vitae ornare. Nulla posuere molestie rutrum. Nulla sit amet eros ut nisl auctor pulvinar.
              Etiam mollis egestas ipsum. Suspendisse tortor dolor, auctor malesuada felis eu, pulvinar tincidunt arcu. Cras eget rutrum diam. Curabitur malesuada quam vitae ipsum volutpat, in luctus augue gravida. 
              Vivamus blandit cursus diam et efficitur. Sed ac sagittis ipsum. Suspendisse ac pellentesque risus. Donec molestie vitae turpis non viverra.',
            'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in maximus nisi, in tincidunt enim. Nunc accumsan odio nibh, quis mollis lacus consectetur eu. Aliquam porta pretium nisl et cursus.
            Aliquam dapibus quam gravida, luctus arcu eget, semper neque. Cras condimentum, sapien eget feugiat pharetra, urna nisl maximus odio, vel fringilla lacus lacus vel magna. Phasellus interdum dapibus molestie. 
            Sed cursus leo sit amet enim cursus ultricies. Vivamus commodo quam id iaculis auctor. Sed dapibus velit ac enim vestibulum blandit. Nulla efficitur, metus semper tristique rhoncus, libero justo tristique metus, 
            id ornare ipsum ligula eget orci. In sollicitudin ut enim non accumsan.');
        $imageEvent=array('cirque.jpg','vald.jpg','sting.jpg','choucroute.jpg','brocante.jpg','diner_con.jpg');
        $eventTypeEvent=array('Spectacle','Concert','Concert','Evenement','Evenement','Spectacle');
        $startDateEvent=array(new \DateTime('2018-10-25'),new \DateTime('2019-01-01'),new \DateTime('2019-12-15'),new \DateTime('2019-03-05'),new \DateTime('2019-12-21'),new \DateTime('2019-12-10'));
        $endDateEvent=array(new \DateTime('2018-10-28'),new \DateTime('2019-01-01'),new \DateTime('2019-12-15'),new \DateTime('2019-03-08'),new \DateTime('2019-12-23'),new \DateTime('2019-12-10'));
        $priceEvent=array(19.99,60.00,44.99,10.00,3.00,30.50);
        $placeRemainEvent=array(250,10000,5000,200,1000,500);
        $placeMaxEvent=array(250,10000,5000,200,1000,500);
        $placeName_PlaceEvent=array('Cirque d\'hiver','Zenith de Paris','Zenith d\'Orléans','Salle des fêtes de la Bourse','Place de Loire','Théatre Sébastopol');
        $nbEvent=count($titleEvent);

        $places = array();
        for($i=0;$i<$nbPlace;$i++){
            $place=new Place(
                $placeNamePlace[$i]."",
                $adressPlace[$i]."",
                $postalCodePlace[$i],
                $cityPlace[$i].""
                );
            $places[]=$place;
            $manager->persist($place);
        }

        $events = array();
        for($i=0;$i<$nbEvent;$i++){
                $event = new Event(
                    $titleEvent[$i] . "",
                    $descriptionEvent[$i] . "",
                    $imageEvent[$i] . "",
                    $eventTypeEvent[$i] . "",
                    $startDateEvent[$i],
                    $endDateEvent[$i],
                    $priceEvent[$i],
                    $placeRemainEvent[$i],
                    $placeMaxEvent[$i],
                    NULL
                );
                $namePlace = $placeName_PlaceEvent[$i];
                for($i2=0;$i2<count($places);$i2++){
                    if($namePlace == ($places[$i2]->getPlaceName())) {
                        $event->setPlaceNamePlace($places[$i2]);
                        break;
                    }
                }
                $events[] = $event;
                $manager->persist($event);

        }

        $manager->flush();
    }
}
