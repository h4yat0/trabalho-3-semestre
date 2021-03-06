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


// Bot??o page-up


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
            nome3.innerHTML="Shenzhen"
            desc1.innerHTML="Hong Kong, ex-col??nia brit??nica, ?? um territ??rio aut??nomo no sudeste da China. Seu centro urbano vibrante e densamente povoado ?? tamb??m um porto importante e um centro financeiro global de destaque, com um horizonte marcado por arranha-c??us. O distrito comercial exibe monumentos arquitet??nicos como a Torre do Bank of China, de I. M. Pei. Hong Kong ?? tamb??m um destino importante para compras, famoso pela alfaiataria sob medida e pelo Mercado Noturno da Rua do Templo."
            desc2.innerHTML="Macau ?? uma regi??o aut??noma na costa sul da China continental, separada de Hong Kong pelo delta do rio das P??rolas. Territ??rio portugu??s at?? 1999, a regi??o reflete uma mistura de influ??ncias culturais. Seus gigantescos cassinos e shoppings na Cotai Strip, que une as ilhas de Taipa e Coloane, foram respons??veis pelo apelido 'Las Vegas da ??sia'. Um dos seus monumentos mais impressionantes ?? a Torre de Macau, de 338 m, que oferece uma vista panor??mica da cidade."
            desc3.innerHTML="Shenzhen, no sudeste da China, ?? uma metr??pole moderna que liga Hong Kong ao continente chin??s. ?? conhecida por seus destinos de compras, como a cidade comercial Lu??h?? Sh??ngy?? Ch??ng, um shopping enorme com grande variedade de artigos, desde roupas personalizadas e bolsas de imita????o. A cidade tamb??m apresenta edif??cios contempor??neos, como o arranha-c??u Ping An Finance Center, de 600 m de altura, e v??rios parques de divers??o."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/hong_kong.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/macau.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/shenzhen.jpg"
            break;
        case "pais2":
            nome1.innerHTML="Rio de Janeiro"
            nome2.innerHTML="S??o Paulo"
            nome3.innerHTML="Salvador"
            desc1.innerHTML="O Rio de Janeiro ?? uma grande cidade brasileira ?? beira-mar, famosa pelas praias de Copacabana e Ipanema, pela est??tua de 38 metros de altura do Cristo Redentor, no topo do Corcovado, e pelo P??o de A????car, um pico de granito com telef??ricos at?? seu cume. A cidade tamb??m ?? conhecida pelas grandes favelas. O empolgante Carnaval, com carros aleg??ricos, fantasias extravagantes e sambistas, ?? considerado o maior do mundo."
            desc2.innerHTML="S??o Paulo, centro financeiro do Brasil, est?? entre as cidades mais populosas do mundo, com diversas institui????es culturais e uma rica tradi????o arquitet??nica. H?? pr??dios simb??licos como a catedral neog??tica, o Edif??cio Martinelli, um arranha-c??u inaugurado em 1929, e o Edif??cio Copan, com suas linhas curvas projetadas pelo arquiteto modernista Oscar Niemeyer. A igreja em estilo colonial do P??tio do Col??gio marca o local onde os padres jesu??tas fundaram a cidade em 1554."
            desc3.innerHTML="Salvador, a capital do estado da Bahia no nordeste do Brasil, ?? conhecida pela arquitetura colonial portuguesa, pela cultura afrobrasileira e pelo litoral tropical. O bairro do Pelourinho ?? seu cora????o hist??rico, com vielas de paralelep??pedo terminando em pra??as grandes, pr??dios coloridos e igrejas barrocas, como S??o Francisco, com trabalhos em madeira revestidos com ouro."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/rio_de_janeiro.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/sao_paulo.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/salvador.jpg"
            break;
        case "pais3":
            nome1.innerHTML="Los Angeles"
            nome2.innerHTML="Orlando"
            nome3.innerHTML="New York"
            desc1.innerHTML=" Los Angeles ?? uma grande cidade do sul da Calif??rnia e tamb??m o centro da ind??stria de cinema e televis??o do pa??s. Perto do famoso letreiro de Hollywood, ?? poss??vel conhecer os bastidores das produ????es nos est??dios Paramount Pictures, Universal e Warner Brothers. Na Hollywood Boulevard, o TCL Chinese Theatre exibe impress??es de m??os e p??s de celebridades na Cal??ada da Fama, uma homenagem a milhares de astros, e se pode comprar mapas das casas dos artistas."
            desc2.innerHTML=" Orlando, uma cidade no centro da Fl??rida, abriga mais de uma dezena de parques tem??ticos. O mais conhecido ?? o Walt Disney World, composto por parques como o Magic Kingdom e o Epcot, al??m de parques aqu??ticos. Outra atra????o importante ?? o Universal Orlando, com o Universal Studios e o Islands of Adventure, sendo que o Wizarding World of Harry Potter abrange ??reas dos dois."
            desc3.innerHTML=" A cidade de Nova York compreende 5 distritos situados no encontro do rio Hudson com o Oceano Atl??ntico. No centro da cidade fica Manhattan, um distrito com alta densidade demogr??fica que est?? entre os principais centros comerciais, financeiros e culturais do mundo. Entre seus pontos emblem??ticos, destacam-se arranha-c??us, como o Empire State Building, e o enorme Central Park. O teatro da Broadway fica em meio ??s luzes de neon da Times Square."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/los_angeles.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/orlando.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/new_york.jpg"
            break;
        case "pais4": 
            nome1.innerHTML="Bangkok"
            nome2.innerHTML="Ayutthaya"
            nome3.innerHTML="Lopburi"
            desc1.innerHTML="Bangkok, a capital da Tail??ndia, ?? uma grande cidade conhecida pelos santu??rios ornamentados e pela animada vida urbana. O rio Chao Phraya, repleto de barcos, abastece a rede de canais, passando pelo distrito real de Rattanakosin, onde fica o opulento Grande Pal??cio e seu sagrado templo Wat Phra Kaew. Nas proximidades, fica o templo Wat Pho, que conta com um enorme Buda reclinado. Na margem oposta, encontra-se o Templo Wat Arun, com uma escadaria ??ngreme e um pin??culo em estilo khmer."
            desc2.innerHTML="Mais de 400 templos foram erguidos na regi??o que hoje ?? tombada como patrim??nio da humanidade pela Unesco. E ainda que os monumentos estejam longe de transmitir a impon??ncia que tinham no passado"
            desc3.innerHTML="Lopburi ?? uma das cidades mais antigas da Tail??ndia, uma antiga capital e a segunda capital depois que Ayutthaya foi estabelecida em 1350. Foi abandonada depois que o rei Narai faleceu em 1688, mas partes foram restauradas em 1856 pelo rei Mongkut (Rei Rama IV) e em 1864 tornou-se a capital do ver??o. Existem duas ??reas centrais em Lopburi: Cidade Nova e Cidade Velha. A maioria dos locais importantes, al??m da esta????o de trem, fica na Cidade Velha; ??nibus chegam e partem da Cidade Nova."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/bangkok.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/ayutthaya.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/lopburi.jpg"
            break;
        case "pais5":
            nome1.innerHTML="Londres"
            nome2.innerHTML="Manchester"
            nome3.innerHTML="Liverpool"
            desc1.innerHTML="Londres, capital da Inglaterra e do Reino Unido, ?? uma cidade do s??culo 21 com uma hist??ria que remonta ?? era romana. Seu centro abriga as sedes imponentes do Parlamento, a famosa torre do rel??gio do Big Ben e a Abadia de Westminster, local de coroa????o dos monarcas brit??nicos. Do outro lado do rio T??misa, a roda gigante London Eye tem vista panor??mica do complexo cultural da margem sul e de toda a cidade."
            desc2.innerHTML="Manchester ?? uma grande cidade no noroeste da Inglaterra com uma rica heran??a industrial. O sistema de canais do s??culo XVIII da ??rea de conserva????o de Castlefield lembra os dias da cidade como uma pot??ncia t??xtil, e os visitantes podem acompanhar essa hist??ria no interativo Museum of Science & Industry. Atualmente, o revitalizado estaleiro Salford Quays abriga o Imperial War Museum North, projetado por Daniel Libeskind, e o centro cultural The Lowry."
            desc3.innerHTML="Liverpool ?? uma cidade portu??ria situada no noroeste da Inglaterra, onde o rio Mersey se encontra com o Mar da Irlanda. Um importante porto de com??rcio e migra????o do s??culo XVIII ao come??o do s??culo XX, ela tamb??m ?? famosa por ser a cidade natal dos Beatles. Balsas navegam pela orla, onde os famosos edif??cios mercantis conhecidos como 'Three Graces' (o Edif??cio Royal Liver, o Edif??cio Cunard e o Edif??cio do Porto de Liverpool) est??o localizados em Pier Head."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/londres.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/manchester.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/liverpool.jpg"
            break;
        case "pais6":
            nome1.innerHTML="Chinatown"
            nome2.innerHTML="Sentosa Island"
            nome3.innerHTML="Distrito Colonial"
            desc1.innerHTML="O labirinto de ruas estreitas de Chinatown inclui a Chinatown Food Street, com seus restaurantes que servem pratos tradicionais como arroz com frango hainan??s, macarr??o e satay. Lojas de souvenires e boutiques indie pontilham a ??rea, oferecendo roupas, artesanato e antiguidades, enquanto a Club Street est?? repleta de bares de vinho badalados. As institui????es culturais incluem o Templo de Sri Mariamman, de 1827, e o ornamentado Buddha Tooth Relic Temple and Museum."
            desc2.innerHTML="Sentosa, que significa paz e tranquilidade em l??ngua malaia, ?? uma ilha resort em Singapura, visitada por cerca de 20 milh??es de pessoas por ano. As atra????es incluem uma praia de 2 km, o Forte Siloso, 2 campos de golfe e 2 hot??is de 5 estrelas."
            desc3.innerHTML="Descubra Cingapura como foi do in??cio do s??culo 19 at?? 1965 nesta excurs??o tur??stica pelas rel??quias e monumentos do passado colonial do pa??s. Aprenda com seu guia sobre o per??odo do dom??nio brit??nico sobre Cingapura e veja os edif??cios que ele deixou para tr??s, da Catedral de St. Andrew ao Raffles Hotel, local de nascimento do coquetel 'Singapore Sling'. Fa??a todas as perguntas que voc?? tiver: nesta excurs??o para grupos pequenos, n??o h?? necessidade de se preocupar se voc?? ser?? ouvido na multid??o."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/chinatown.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/sentosa.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/distrito_colonial.jpg"
            break;
        case "pais7": 
            nome1.innerHTML="Paris"
            nome2.innerHTML="Lyon"
            nome3.innerHTML="Nice"
            desc1.innerHTML="Paris, a capital da Fran??a, ?? uma importante cidade europeia e um centro mundial de arte, moda, gastronomia e cultura. Sua paisagem urbana do s??culo XIX ?? cortada por avenidas largas e pelo rio Sena. A cidade ?? conhecida por monumentos como a Torre Eiffel e a Catedral de Notre-Dame, uma constru????o g??tica do s??culo XII, sendo famosa tamb??m pela cultura dos caf??s e por lojas de estilistas famosos na Rue du Faubourg Saint-Honor??."
            desc2.innerHTML="Lyon, cidade na hist??rica regi??o francesa do R??dano-Alpes, est?? situada na jun????o dos rios R??dano e Sa??ne. Seu centro reflete 2.000 anos de hist??ria, com o anfiteatro romano Trois Gaules, arquitetura medieval e renascentista na Lyon antiga e o moderno bairro de Confluence na pen??nsula de Presqu'??le. Traboules, passagens cobertas entre constru????es, conectam a cidade antiga ?? colina La Croix-Rousse."
            desc3.innerHTML="Nice, capital do departamento dos Alpes Mar??timos, na Riviera Francesa, est?? localizada na praia de seixos da Baie des Anges. Fundada pelos gregos e depois transformada em retiro da elite europeia do s??culo XIX, a cidade atrai artistas h?? muito tempo. Henri Matisse, seu antigo morador, ?? homenageado com uma cole????o de pinturas que abrange toda a sua carreira no Museu Matisse. O Museu Marc Chagall exibe algumas das principais obras religiosas do artista hom??nimo."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/paris.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/lyon.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/nice.jpg"
            break;
        case "pais8":
            nome1.innerHTML="Roma"
            nome2.innerHTML="Mil??o"
            nome3.innerHTML="Veneza"
            desc1.innerHTML="Roma, a capital da It??lia, ?? uma cidade cosmopolita, enorme, com quase 3.000 anos de arte, arquitetura e cultura influentes no mundo todo e ?? mostra. Ru??nas antigas como o F??rum e o Coliseu evocam o poder do antigo Imp??rio Romano. A Cidade do Vaticano, sede da Igreja Cat??lica Romana, tem a Bas??lica de S??o Pedro e os museus do Vaticano, que abrigam obras-primas como os afrescos da Capela Sistina de Michel??ngelo."
            desc2.innerHTML="Mil??o, uma metr??pole na regi??o da Lombardia ao norte da It??lia, ?? uma capital mundial da moda e do design. Cidade da bolsa de valores nacional, trata-se de um centro financeiro tamb??m conhecido pelas suas lojas e pelos seus restaurantes sofisticados. A catedral Gothic Duomo di Milano e o convento Santa Maria delle Grazie, onde est?? o mural de Leonardo da Vinci 'A ??ltima Ceia', s??o testemunhas de s??culos de arte e cultura."
            desc3.innerHTML="Veneza, a capital da regi??o de V??neto, no norte da It??lia, ?? formada por mais de 100 pequenas ilhas em uma lagoa no Mar Adri??tico. A cidade n??o tem estradas, apenas canais (como a via Grand Canal), repletos de pal??cios g??ticos e renascentistas. Na pra??a central, Piazza San Marco, ficam a Bas??lica de S??o Marcos, coberta de mosaicos bizantinos, e o campan??rio, com vista para os telhados vermelhos da cidade."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/roma.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/milao.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/veneza.jpg"
            break;
        case "pais9":
            nome1.innerHTML="Tokyo"
            nome2.innerHTML="Kyoto"
            nome3.innerHTML="Osaka"
            desc1.innerHTML="T??quio, a movimentada capital do Jap??o, combina o estilo ultramoderno com o tradicional, desde arranha-c??us iluminados por neon a templos hist??ricos. O opulento santu??rio xinto??sta Meiji ?? conhecido por seu alt??ssimo port??o e pelas florestas circundantes. O Pal??cio Imperial fica localizado em meio a jardins p??blicos. Os muitos museus da cidade oferecem exposi????es que variam de arte cl??ssica (no Museu Nacional de T??quio) a um teatro kabuki reconstru??do (no Museu Edo-Tokyo)."
            desc2.innerHTML="Kyoto, antiga capital do Jap??o, ?? uma cidade da ilha de Honshu, famosa por seus v??rios templos cl??ssicos budistas, jardins, pal??cios imperiais, santu??rios xinto??stas e casas de madeira tradicionais. Ela tamb??m ?? conhecida pelas tradi????es formais, como o jantar kaiseki, com v??rios pratos espec??ficos, e as gueixas, geralmente encontradas no distrito de Gion"
            desc3.innerHTML="Osaka ?? uma grande cidade portu??ria e um centro comercial na ilha japonesa de Honshu. Ela ?? conhecida pela arquitetura moderna, pela vida noturna e pela comida de rua. O castelo Osaka do xogunato do s??culo 16, que passou por v??rias restaura????es, ?? o ponto tur??stico hist??rico principal. Ele est?? cercado por um fosso e um parque com ameixeiras, pessegueiras e cerejeiras. Sumiyoshi-taisha est?? entre os santu??rios Shinto mais antigos do Jap??o."
            img1.src=''
            img2.src=''
            img3.src=''
            img1.src+="public/assets/img/imgs_cidades/imgs_descricoes/tokyo.jpg"
            img2.src+="public/assets/img/imgs_cidades/imgs_descricoes/kyoto.jpg"
            img3.src+="public/assets/img/imgs_cidades/imgs_descricoes/osaka.jpg"
            break;
    }
    
}

/*card pacote lista*/




   

