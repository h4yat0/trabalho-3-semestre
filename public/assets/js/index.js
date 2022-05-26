function showHideCards() {

    let amountOfCards = document.citiesForm.amountOfCards.value;
    let card1 = document.getElementById("card1");
    let card2 = document.getElementById("card2");
    let card3 = document.getElementById("card3");

    if(amountOfCards == "one") {
        card1.style.display = "grid";
        card2.style.display = "none";
        card3.style.display = "none";
    }
    if(amountOfCards == "two") {
        card1.style.display = "grid";
        card2.style.display = "grid";
        card3.style.display = "none";
    }
    if(amountOfCards == "three") {
        card1.style.display = "grid";
        card2.style.display = "grid";
        card3.style.display = "grid";
    }
}

function showHideForms() {

    let amountOfForms = document.citiesForm.amountOfForms.value;
    let city1 = document.citiesForm.city1;
    let city2 = document.citiesForm.city2;
    let city3 = document.citiesForm.city3;
    let city4 = document.citiesForm.city4;
    let city5 = document.citiesForm.city5;
    let city6 = document.citiesForm.city6;

    if (amountOfForms == "one") {
        city1.style.display = "block";
        city2.style.display = "none";
        city3.style.display = "none";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "two") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "none";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "three") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "none";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "four") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "none";
        city6.style.display = "none";
    }
    if (amountOfForms == "five") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "block";
        city6.style.display = "none";
    }
    if (amountOfForms == "six") {
        city1.style.display = "block";
        city2.style.display = "block";
        city3.style.display = "block";
        city4.style.display = "block";
        city5.style.display = "block";
        city6.style.display = "block";
    }
}

function showHideTripForms() {
    let tripForms = document.getElementById("divformCities");

    if (tripForms.style.display == "none") {
        tripForms.style.display = "block"; 
    } else {
        tripForms.style.display = "none";
    }
}


// Botão page-up


let btn = document.querySelector("#botao");


btn.addEventListener("click", function() {
    
    window.scrollTo(0, 0);
    
});

// ocultando e mostrando a div "descricao_paises"

function mostrar(){
    let display = document.getElementById("descricao_paises").style.display;
   if (display == "none"){
    document.getElementById("descricao_paises").style.display = 'block';
   }
}

function desc(value){
    mostrar();

    let nome1=document.getElementsByClassName("nome_cidade")[0]
    let nome2=document.getElementsByClassName("nome_cidade")[1]
    let nome3=document.getElementsByClassName("nome_cidade")[2]
    let desc1=document.getElementsByClassName("descricao")[0]
    let desc2=document.getElementsByClassName("descricao")[1]
    let desc3=document.getElementsByClassName("descricao")[2]
    let img1=document.getElementsByClassName("img_desc")[0]
    let img2=document.getElementsByClassName("img_desc")[1]
    let img3=document.getElementsByClassName("img_desc")[2]

    switch(value){
        case "pais1": 
            nome1.innerHTML="Hong Kong"
            nome2.innerHTML="Macau"
            nome3.innerHTML="Shenzen"
            desc1.innerHTML="Hong Kong, ex-colônia britânica, é um território autônomo no sudeste da China. Seu centro urbano vibrante e densamente povoado é também um porto importante e um centro financeiro global de destaque, com um horizonte marcado por arranha-céus. O distrito comercial exibe monumentos arquitetônicos como a Torre do Bank of China, de I. M. Pei. Hong Kong é também um destino importante para compras, famoso pela alfaiataria sob medida e pelo Mercado Noturno da Rua do Templo."
            desc2.innerHTML="Macau é uma região autônoma na costa sul da China continental, separada de Hong Kong pelo delta do rio das Pérolas. Território português até 1999, a região reflete uma mistura de influências culturais. Seus gigantescos cassinos e shoppings na Cotai Strip, que une as ilhas de Taipa e Coloane, foram responsáveis pelo apelido 'Las Vegas da Ásia'. Um dos seus monumentos mais impressionantes é a Torre de Macau, de 338 m, que oferece uma vista panorâmica da cidade."
            desc3.innerHTML="Shenzhen, no sudeste da China, é uma metrópole moderna que liga Hong Kong ao continente chinês. É conhecida por seus destinos de compras, como a cidade comercial Luóhú Shāngyè Chéng, um shopping enorme com grande variedade de artigos, desde roupas personalizadas e bolsas de imitação. A cidade também apresenta edifícios contemporâneos, como o arranha-céu Ping An Finance Center, de 600 m de altura, e vários parques de diversão."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/hong_kong.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/macau.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/shenzhen.jpg)"
            break;
        case "pais2":
            nome1.innerHTML="Rio de Janeiro"
            nome2.innerHTML="São Paulo"
            nome3.innerHTML="Salvador"
            desc1.innerHTML="O Rio de Janeiro é uma grande cidade brasileira à beira-mar, famosa pelas praias de Copacabana e Ipanema, pela estátua de 38 metros de altura do Cristo Redentor, no topo do Corcovado, e pelo Pão de Açúcar, um pico de granito com teleféricos até seu cume. A cidade também é conhecida pelas grandes favelas. O empolgante Carnaval, com carros alegóricos, fantasias extravagantes e sambistas, é considerado o maior do mundo."
            desc2.innerHTML="São Paulo, centro financeiro do Brasil, está entre as cidades mais populosas do mundo, com diversas instituições culturais e uma rica tradição arquitetônica. Há prédios simbólicos como a catedral neogótica, o Edifício Martinelli, um arranha-céu inaugurado em 1929, e o Edifício Copan, com suas linhas curvas projetadas pelo arquiteto modernista Oscar Niemeyer. A igreja em estilo colonial do Pátio do Colégio marca o local onde os padres jesuítas fundaram a cidade em 1554."
            desc3.innerHTML="Salvador, a capital do estado da Bahia no nordeste do Brasil, é conhecida pela arquitetura colonial portuguesa, pela cultura afrobrasileira e pelo litoral tropical. O bairro do Pelourinho é seu coração histórico, com vielas de paralelepípedo terminando em praças grandes, prédios coloridos e igrejas barrocas, como São Francisco, com trabalhos em madeira revestidos com ouro."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/rio_de_janeiro.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/sao_paulo.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/salvador.jpg)"
            break;
        case "pais3":
            nome1.innerHTML="Los Angeles"
            nome2.innerHTML="Orlando"
            nome3.innerHTML="New York"
            desc1.innerHTML=" Los Angeles é uma grande cidade do sul da Califórnia e também o centro da indústria de cinema e televisão do país. Perto do famoso letreiro de Hollywood, é possível conhecer os bastidores das produções nos estúdios Paramount Pictures, Universal e Warner Brothers. Na Hollywood Boulevard, o TCL Chinese Theatre exibe impressões de mãos e pés de celebridades na Calçada da Fama, uma homenagem a milhares de astros, e se pode comprar mapas das casas dos artistas."
            desc2.innerHTML=" Orlando, uma cidade no centro da Flórida, abriga mais de uma dezena de parques temáticos. O mais conhecido é o Walt Disney World, composto por parques como o Magic Kingdom e o Epcot, além de parques aquáticos. Outra atração importante é o Universal Orlando, com o Universal Studios e o Islands of Adventure, sendo que o Wizarding World of Harry Potter abrange áreas dos dois."
            desc3.innerHTML=" A cidade de Nova York compreende 5 distritos situados no encontro do rio Hudson com o Oceano Atlântico. No centro da cidade fica Manhattan, um distrito com alta densidade demográfica que está entre os principais centros comerciais, financeiros e culturais do mundo. Entre seus pontos emblemáticos, destacam-se arranha-céus, como o Empire State Building, e o enorme Central Park. O teatro da Broadway fica em meio às luzes de neon da Times Square."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/los_angeles.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/orlando.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/new_york.jpg)"
            break;
        case "pais4": 
            nome1.innerHTML="Bangkok"
            nome2.innerHTML="Ayutthaya"
            nome3.innerHTML="Lopburi"
            desc1.innerHTML="Bangkok, a capital da Tailândia, é uma grande cidade conhecida pelos santuários ornamentados e pela animada vida urbana. O rio Chao Phraya, repleto de barcos, abastece a rede de canais, passando pelo distrito real de Rattanakosin, onde fica o opulento Grande Palácio e seu sagrado templo Wat Phra Kaew. Nas proximidades, fica o templo Wat Pho, que conta com um enorme Buda reclinado. Na margem oposta, encontra-se o Templo Wat Arun, com uma escadaria íngreme e um pináculo em estilo khmer."
            desc2.innerHTML="Mais de 400 templos foram erguidos na região que hoje é tombada como patrimônio da humanidade pela Unesco. E ainda que os monumentos estejam longe de transmitir a imponência que tinham no passado"
            desc3.innerHTML="Lopburi é uma das cidades mais antigas da Tailândia, uma antiga capital e a segunda capital depois que Ayutthaya foi estabelecida em 1350. Foi abandonada depois que o rei Narai faleceu em 1688, mas partes foram restauradas em 1856 pelo rei Mongkut (Rei Rama IV) e em 1864 tornou-se a capital do verão. Existem duas áreas centrais em Lopburi: Cidade Nova e Cidade Velha. A maioria dos locais importantes, além da estação de trem, fica na Cidade Velha; ônibus chegam e partem da Cidade Nova. Lopburi é famosa pelas centenas de macacos comedores de caranguejo que invadem a Cidade Velha, especialmente na área ao redor de Phra Prang Sam Yod e do Santuário Phra Kaan. Fique de olho nos macacos pendurados em árvores e fios e sentados em telhados e saliências, e esteja ciente de que eles têm alguns maus hábitos desagradáveis, incluindo defecar em pedestres desavisados ​​de seus poleiros, pular nas pessoas para pegar comida e roubar sacolas que eles suspeitam pode conter algo comestível. Os macacos também têm uma propensão a roubar óculos, chapéus, câmeras, cigarros, garrafas de água e qualquer coisa que possam arrancar de uma bolsa ou bolsos."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/bangkok.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/ayutthaya.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/lopburi.jpg)"
            break;
        case "pais5":
            nome1.innerHTML="Londres"
            nome2.innerHTML="Manchester"
            nome3.innerHTML="Liverpool"
            desc1.innerHTML="Londres, capital da Inglaterra e do Reino Unido, é uma cidade do século 21 com uma história que remonta à era romana. Seu centro abriga as sedes imponentes do Parlamento, a famosa torre do relógio do Big Ben e a Abadia de Westminster, local de coroação dos monarcas britânicos. Do outro lado do rio Tâmisa, a roda gigante London Eye tem vista panorâmica do complexo cultural da margem sul e de toda a cidade."
            desc2.innerHTML="Manchester é uma grande cidade no noroeste da Inglaterra com uma rica herança industrial. O sistema de canais do século XVIII da área de conservação de Castlefield lembra os dias da cidade como uma potência têxtil, e os visitantes podem acompanhar essa história no interativo Museum of Science & Industry. Atualmente, o revitalizado estaleiro Salford Quays abriga o Imperial War Museum North, projetado por Daniel Libeskind, e o centro cultural The Lowry."
            desc3.innerHTML="Liverpool é uma cidade portuária situada no noroeste da Inglaterra, onde o rio Mersey se encontra com o Mar da Irlanda. Um importante porto de comércio e migração do século XVIII ao começo do século XX, ela também é famosa por ser a cidade natal dos Beatles. Balsas navegam pela orla, onde os famosos edifícios mercantis conhecidos como 'Three Graces' (o Edifício Royal Liver, o Edifício Cunard e o Edifício do Porto de Liverpool) estão localizados em Pier Head."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/londres.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/manchester.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/liverpool.jpg)"
            break;
        case "pais6":
            nome1.innerHTML="Chinatown"
            nome2.innerHTML="Sentosa Island"
            nome3.innerHTML="Distrito Colonial"
            desc1.innerHTML="O labirinto de ruas estreitas de Chinatown inclui a Chinatown Food Street, com seus restaurantes que servem pratos tradicionais como arroz com frango hainanês, macarrão e satay. Lojas de souvenires e boutiques indie pontilham a área, oferecendo roupas, artesanato e antiguidades, enquanto a Club Street está repleta de bares de vinho badalados. As instituições culturais incluem o Templo de Sri Mariamman, de 1827, e o ornamentado Buddha Tooth Relic Temple and Museum."
            desc2.innerHTML="Sentosa, que significa paz e tranquilidade em língua malaia, é uma ilha resort em Singapura, visitada por cerca de 20 milhões de pessoas por ano. As atrações incluem uma praia de 2 km, o Forte Siloso, 2 campos de golfe e 2 hotéis de 5 estrelas."
            desc3.innerHTML="Descubra Cingapura como foi do início do século 19 até 1965 nesta excursão turística pelas relíquias e monumentos do passado colonial do país. Aprenda com seu guia sobre o período do domínio britânico sobre Cingapura e veja os edifícios que ele deixou para trás, da Catedral de St. Andrew ao Raffles Hotel, local de nascimento do coquetel 'Singapore Sling'. Faça todas as perguntas que você tiver: nesta excursão para grupos pequenos, não há necessidade de se preocupar se você será ouvido na multidão."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/chinatown.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/sentosa.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/distrito_colonial.jpg)"
            break;
        case "pais7": 
            nome1.innerHTML="Paris"
            nome2.innerHTML="Lyon"
            nome3.innerHTML="Nice"
            desc1.innerHTML="Paris, a capital da França, é uma importante cidade europeia e um centro mundial de arte, moda, gastronomia e cultura. Sua paisagem urbana do século XIX é cortada por avenidas largas e pelo rio Sena. A cidade é conhecida por monumentos como a Torre Eiffel e a Catedral de Notre-Dame, uma construção gótica do século XII, sendo famosa também pela cultura dos cafés e por lojas de estilistas famosos na Rue du Faubourg Saint-Honoré."
            desc2.innerHTML="Lyon, cidade na histórica região francesa do Ródano-Alpes, está situada na junção dos rios Ródano e Saône. Seu centro reflete 2.000 anos de história, com o anfiteatro romano Trois Gaules, arquitetura medieval e renascentista na Lyon antiga e o moderno bairro de Confluence na península de Presqu'île. Traboules, passagens cobertas entre construções, conectam a cidade antiga à colina La Croix-Rousse."
            desc3.innerHTML="Nice, capital do departamento dos Alpes Marítimos, na Riviera Francesa, está localizada na praia de seixos da Baie des Anges. Fundada pelos gregos e depois transformada em retiro da elite europeia do século XIX, a cidade atrai artistas há muito tempo. Henri Matisse, seu antigo morador, é homenageado com uma coleção de pinturas que abrange toda a sua carreira no Museu Matisse. O Museu Marc Chagall exibe algumas das principais obras religiosas do artista homônimo."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/paris.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/lyon.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/nice.jpg)"
            break;
        case "pais8":
            nome1.innerHTML="Roma"
            nome2.innerHTML="Milão"
            nome3.innerHTML="Veneza"
            desc1.innerHTML="Roma, a capital da Itália, é uma cidade cosmopolita, enorme, com quase 3.000 anos de arte, arquitetura e cultura influentes no mundo todo e à mostra. Ruínas antigas como o Fórum e o Coliseu evocam o poder do antigo Império Romano. A Cidade do Vaticano, sede da Igreja Católica Romana, tem a Basílica de São Pedro e os museus do Vaticano, que abrigam obras-primas como os afrescos da Capela Sistina de Michelângelo."
            desc2.innerHTML="Milão, uma metrópole na região da Lombardia ao norte da Itália, é uma capital mundial da moda e do design. Cidade da bolsa de valores nacional, trata-se de um centro financeiro também conhecido pelas suas lojas e pelos seus restaurantes sofisticados. A catedral Gothic Duomo di Milano e o convento Santa Maria delle Grazie, onde está o mural de Leonardo da Vinci 'A Última Ceia', são testemunhas de séculos de arte e cultura."
            desc3.innerHTML="Veneza, a capital da região de Vêneto, no norte da Itália, é formada por mais de 100 pequenas ilhas em uma lagoa no Mar Adriático. A cidade não tem estradas, apenas canais (como a via Grand Canal), repletos de palácios góticos e renascentistas. Na praça central, Piazza San Marco, ficam a Basílica de São Marcos, coberta de mosaicos bizantinos, e o campanário, com vista para os telhados vermelhos da cidade."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/roma.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/milao.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/veneza.jpg)"
            break;
        case "pais9":
            nome1.innerHTML="Tokyo"
            nome2.innerHTML="Kyoto"
            nome3.innerHTML="Osaka"
            desc1.innerHTML="Tóquio, a movimentada capital do Japão, combina o estilo ultramoderno com o tradicional, desde arranha-céus iluminados por neon a templos históricos. O opulento santuário xintoísta Meiji é conhecido por seu altíssimo portão e pelas florestas circundantes. O Palácio Imperial fica localizado em meio a jardins públicos. Os muitos museus da cidade oferecem exposições que variam de arte clássica (no Museu Nacional de Tóquio) a um teatro kabuki reconstruído (no Museu Edo-Tokyo)."
            desc2.innerHTML="Kyoto, antiga capital do Japão, é uma cidade da ilha de Honshu, famosa por seus vários templos clássicos budistas, jardins, palácios imperiais, santuários xintoístas e casas de madeira tradicionais. Ela também é conhecida pelas tradições formais, como o jantar kaiseki, com vários pratos específicos, e as gueixas, geralmente encontradas no distrito de Gion"
            desc3.innerHTML="Osaka é uma grande cidade portuária e um centro comercial na ilha japonesa de Honshu. Ela é conhecida pela arquitetura moderna, pela vida noturna e pela comida de rua. O castelo Osaka do xogunato do século 16, que passou por várias restaurações, é o ponto turístico histórico principal. Ele está cercado por um fosso e um parque com ameixeiras, pessegueiras e cerejeiras. Sumiyoshi-taisha está entre os santuários Shinto mais antigos do Japão."
            img1.style.backgroundImage="url(./src/img/imgs_descricoes/tokyo.jpg)"
            img2.style.backgroundImage="url(./src/img/imgs_descricoes/kyoto.jpg)"
            img3.style.backgroundImage="url(./src/img/imgs_descricoes/osaka.jpg)"
            break;
    }
    
   
    
}



   

