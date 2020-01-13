import Vue from 'vue'
import Vuex from 'vuex'

Vue.use(Vuex)

export default new Vuex.Store({
  state: {
    /*events : [
      {
        "id":"1",
        "place_name_place_id":"Cirque d'hiver",
        "title":"Cirque de la nuit",
        "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. " +
            "Sed elit libero, mattis malesuada leo ut, condimentum iaculis erat. " +
            "Nunc scelerisque magna in eros interdum,\n convallis convallis nibh " +
            "egestas. Fusce ipsum enim, dignissim sed pharetra in, egestas non lectus. " +
            "In elit leo, tincidunt et feugiat sed, auctor non elit. Class aptent taciti sociosqu ad \n" +
            "litora torquent per conubia nostra, per inceptos himenaeos. Nulla eu justo elit. Sed ullamcorper convallis " +
            "erat, in pretium arcu congue nec. Aliquam ut gravida arcu. ",
        "image":"cirque.jpg",
        "event_type":"Spectacle",
        "start_date":"2018-10-25",
        "end_date":"2018-10-28",
        "price":"19.99",
        "place_remain":"250",
        "place_max":"250"
      },
      {
        "id":"2",
        "place_name_place_id":"Zenith de Paris",
        "title":"VALD",
        "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris eu scelerisque " +
            "odio. Maecenas vitae placerat felis, sed volutpat velit. Vivamus dignissim purus vitae \n" +
            "sapien faucibus, cursus ultricies arcu fermentum. Donec in finibus risus. Cras in bibendum ex." +
            " Nam eleifend neque non massa porttitor, sed finibus quam molestie. Maecenas \n" +
            "ut eros in metus ornare rhoncus. Fusce dictum consequat dui, sit amet blandit massa molestie a. Vivamus quis dignissim est, " +
            "eget convallis velit. Fusce rutrum lectus ut nulla mattis," +
            "sed dignissim felis ullamcorper. Duis maximus turpis eu enim semper sagittis. " +
            "Nullam ligula mi, blandit non dui ac, ultrices pulvinar nibh.",
        "image":"vald.jpg",
        "event_type":"Concert",
        "start_date":"2019-01-01",
        "end_date":"2019-01-01",
        "price":"60",
        "place_remain":"10000",
        "place_max":"10000"
      },
      {
        "id":"3",
        "place_name_place_id":"Zenith d'Orléans",
        "title":"Sting","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit." +
            " Pellentesque bibendum tellus non tellus pulvinar, nec pulvinar nulla eleifend. Sed mattis" +
            " malesuada tincidunt. Sed eu ornare \nturpis, id tincidunt quam. In hac habitasse platea dictumst. " +
            "Curabitur placerat ultrices quam vel aliquet. In vestibulum, magna vel commodo varius, purus neque " +
            "pharetra ligula, id auctor \nipsum dui id diam. Sed rutrum turpis ut elit commodo semper. Morbi eu nisi tortor. " +
            "Praesent malesuada nibh et erat pulvinar faucibus et vel ipsum. Quisque consequat nisl ac venenatis vulputate.\n" +
            "Ut rhoncus est eu nibh ullamcorper, eget rutrum arcu venenatis. Quisque a laoreet arcu, at ultricies augue. Nunc non mi justo. " +
            "Duis faucibus, ante id consectetur malesuada, nisl enim viverra\nsapien, id tincidunt felis ligula sed purus.",
        "image":"sting.jpg",
        "event_type":"Concert",
        "start_date":"2019-12-15",
        "end_date":"2019-12-15",
        "price":"44.99",
        "place_remain":"5000",
        "place_max":"5000"
      },
      {
        "id":"4",
        "place_name_place_id":"Salle des fêtes de la Bourse",
        "title":"Fête de la choucroute",
        "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ac auctor elit. " +
            "Etiam malesuada ut nisi ac feugiat. Phasellus quis dolor non urna euismod vehicula. Pellentesque " +
            "auctor maximus ante\nsed aliquet. Quisque tempus viverra arcu a ullamcorper. Vestibulum maximus gravida " +
            "accumsan. Praesent bibendum feugiat enim non varius. Nam nec eros justo. Suspendisse vestibulum efficitur" +
            "est,\nvel commodo purus interdum in. Pellentesque ac gravida augue.",
        "image":"choucroute.jpg",
        "event_type":"Evenement",
        "start_date":"2019-03-05",
        "end_date":"2019-03-08",
        "price":"10",
        "place_remain":"200",
        "place_max":"200"
      },
      {
        "id":"5",
        "place_name_place_id":"Place de Loire",
        "title":"La Grand Brocante de Noël",
        "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu aliquam purus." +
            " Etiam neque est, hendrerit ac pretium quis, aliquam id diam. Proin id convallis ligula. " +
            "Curabitur luctus hendrerit\nlectus, a faucibus velit egestas eget. Aenean nec placerat " +
            "sem, nec dictum purus. Mauris pharetra euismod arcu vitae ornare. Nulla posuere molestie rutrum. " +
            "Nulla sit amet eros ut nisl auctor pulvinar.\nEtiam mollis egestas ipsum. Suspendisse tortor dolor," +
            "auctor malesuada felis eu, pulvinar tincidunt arcu. Cras eget rutrum diam. Curabitur malesuada quam vitae " +
            "ipsum volutpat, in luctus augue gravida. \nVivamus blandit cursus diam et efficitur. Sed ac " +
            "sagittis ipsum. Suspendisse ac pellentesque risus. Donec molestie vitae turpis non viverra.",
        "image":"brocante.jpg",
        "event_type":"Evenement",
        "start_date":"2019-12-21",
        "end_date":"2019-12-23",
        "price":"3",
        "place_remain":"1000",
        "place_max":"1000"
      },
      {
        "id":"6",
        "place_name_place_id":"Théatre Sébastopol",
        "title":"Un diner de con",
        "description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris in maximus nisi, in " +
            "tincidunt enim. Nunc accumsan odio nibh, quis mollis lacus consectetur eu. Aliquam porta pretium " +
            "nisl et cursus.\nAliquam dapibus quam gravida, luctus arcu eget, semper neque. Cras condimentum, " +
            "sapien eget feugiat pharetra, urna nisl maximus odio, vel fringilla lacus lacus vel magna. " +
            "Phasellus interdum dapibus molestie. \nSed cursus leo sit amet enim cursus ultricies. Vivamus commodo " +
            "quam id iaculis auctor. Sed dapibus velit ac enim vestibulum blandit. Nulla efficitur, metus semper " +
            "tristique rhoncus, libero justo tristique metus, \nid ornare ipsum ligula eget orci. In sollicitudin ut enim non accumsan.",
        "image":"diner_con.jpg",
        "event_type":"Spectacle",
        "start_date":"2019-12-10",
        "end_date":"2019-12-10",
        "price":"30.5",
        "place_remain":"500",
        "place_max":"500"
      }
    ],
    places : [
      {
        "place_name":"Arène de Nimes",
        "adress":"Boulevard des Arènes",
        "postal_code":"30000",
        "city":"Nîmes"
      },
      {
        "place_name":"Arkéa Arena",
        "adress":"48-50 Avenue Jean Alfonséa",
        "postal_code":"59800",
        "city":"Lille"
      },
      {
        "place_name":"Astrolabe",
        "adress":"Boulevard des Arènes",
        "postal_code":"17033",
        "city":"Nîmes"
      },
      {
        "place_name":"Bataclan",
        "adress":"50 Boulevard Voltaire",
        "postal_code":"75009",
        "city":"Paris"
      },
      {
        "place_name":"Centre Pompidou",
        "adress":"Place Georges-Pompidou",
        "postal_code":"30000",
        "city":"Paris"
      },
      {
        "place_name":"Cirque d'hiver",
        "adress":"110 Rue Amelot",
        "postal_code":"3328",
        "city":"Paris"
      },
      {
        "place_name":"Espace Encan",
        "adress":"Quai Louis Prunier",
        "postal_code":"13004",
        "city":"La Rochelle"
      },
      {
        "place_name":"Espace Gerson",
        "adress":"1 Place Gerson",
        "postal_code":"33270",
        "city":"Floirac"
      },
      {
        "place_name":"Le Dôme",
        "adress":"48 Avenue de Saint-Just",
        "postal_code":"69005",
        "city":"Marseille"
      },
      {
        "place_name":"Le Spotlight",
        "adress":"100 Rue Léon Gambetta",
        "postal_code":"59000",
        "city":"Lille"
      },
      {
        "place_name":"Olympia",
        "adress":"28 Boulevard des Capucines",
        "postal_code":"75011",
        "city":"Paris"
      },
      {
        "place_name":"Palais des festivals et des congrès de Cannes",
        "adress":"1 Boulevard de la Croisette",
        "postal_code":"75004",
        "city":"Cannes"
      },
      {
        "place_name":"Parc des princes",
        "adress":"24 Rue du Commandant Guilbaud",
        "postal_code":"75011",
        "city":"Paris"
      },
      {
        "place_name":"Place de Loire",
        "adress":"Place de Loire",
        "postal_code":"0",
        "city":"None"
      },
      {
        "place_name":"Salle des fêtes de la Bourse",
        "adress":"1 Place du Maréchal de Lattre de Tassigny",
        "postal_code":"45000",
        "city":"Orléans"
      },
      {
        "place_name":"Théâtre Mogador",
        "adress":"25 Rue de Mogador",
        "postal_code":"75016",
        "city":"Paris"
      },
      {
        "place_name":"Théatre Municipal de Chartres",
        "adress":"Place de Ravenne",
        "postal_code":"75009",
        "city":"Chartres"
      },
      {
        "place_name":"Théatre Sébastopol",
        "adress":"Place Sébastopol",
        "postal_code":"67000",
        "city":"Strasbourg"
      },
      {
        "place_name":"Zenith d'Orléans",
        "adress":"1 Rue du Président Robert Schuman",
        "postal_code":"45100",
        "city":"Orléans"
      },
      {
        "place_name":"Zenith de Paris",
        "adress":"211 Avenue Jean Jaurès",
        "postal_code":"75019",
        "city":"Paris"
      },
      {
        "place_name":"Zenith de Rouen",
        "adress":"44 Avenue des Canadiens",
        "postal_code":"76120",
        "city":"Rouen"
      }
    ],
    users : [
      {
        "id":"1",
        "username":"admin",
        "roles":"{\"role\": \"ROLE_ADMIN\"}",
        "password":"$argon2i$v=19$m=1024,t=2,p=2$b0h3aENYazFxeVRKU0k3NQ$nS5zwWtiY8Kx81Qzo5cwXIXOk9+8C7LcOUb9I8r09qE",
        "name":"admin",
        "first_name":"admin",
        "adress":null,
        "postal_code":null,
        "city":null
      },
      {
        "id":"2",
        "username":"user",
        "roles":"{\"role\": \"ROLE_USER\"}",
        "password":"$argon2i$v=19$m=1024,t=2,p=2$aHdHS0RUM3FYaVpQbVpEcQ$QJOREaQPU2VFKbmXSC2XjiVYC3cCKCRQnnaZ9HTyPYo",
        "name":"Bernard",
        "first_name":"Dupont",
        "adress":"1 rue des sardines",
        "postal_code":"17000",
        "city":"La Rochelle"
      }
    ],*/
    urlEvents: 'http://localhost:8000/api/events/',
    urlPlaces: 'http://localhost:8000/api/places/',
    events:[],
    places:[]
  },
  getters: {
    getPlaceByPlaceName: (state) => (id) => {
      return state.places.find(place => place.place_name === id)
    }
  },
  mutations: {
    setEvents(state, data) {
      state.events = data
    },
    setPlaces(state, data) {
      state.place = data
    },
    setUsers(state, data) {
      state.users = data
    }
  },
  actions: {
  }

})
