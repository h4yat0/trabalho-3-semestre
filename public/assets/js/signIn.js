// Utilizando Cleave JS para formatar números de telefone
let phoneNumber = new Cleave('#phoneNumber', {
    phone:true,
    phoneRegionCode: 'BR'
})

let cpf = new Cleave('#cpf', {
  numericOnly: true,
  delimiters: ['.', '.', '-'],
  blocks: [3, 3, 3, 2],
  uppercase: true
});

let rg = new Cleave('#rgInput', {
  numericOnly: true,
  delimiters: ['.', '.', '-'],
  blocks: [2, 3, 3, 1],
  uppercase: true
});

let cnpj = new Cleave('#cnpjInput', {
  numericOnly: true,
  delimiters: ['.', '.', '/', '.', '-'],
  blocks: [2, 3, 3, 4, 2],
  uppercase: true
});

let cep = new Cleave('#cep', {
  numericOnly: true,
  delimiters: ['-'],
  blocks: [5, 3],
  uppercase: true
});

function changeLabel() {

  let dummy = document.getElementById('dummy')
  let docName = document.getElementById('docI')
  let radios =  document.getElementsByName('identifier');

  let docs = document.getElementsByClassName('input-rg-cnpj')
  let rg = docs[0]
  let cnpj = docs[1]

  let pjInfo = document.getElementsByClassName('input-pj')
  let divPj = document.getElementById('div-pj')

  if(radios[0].checked) {
    docName.innerHTML = 'RG'
    
    rg.disabled = false
    rg.style.display = 'block'

    cnpj.disabled = true
    cnpj.style.display = 'none'
    cnpj.value = ''

    for(let i = 0; i < 2; i++){
      pjInfo[i].disabled = true
      pjInfo[i].style.display = 'none'
      pjInfo[i].value = ''
    }
    divPj.style.display = 'none'

    dummy.style.display = 'none'

  } else if (radios[1].checked) {
    docName.innerHTML = 'CNPJ'

    rg.disabled = true
    rg.style.display = 'none'
    rg.value = ''

    cnpj.disabled = false
    cnpj.style.display = 'block'

    for(let i = 0; i < 2; i++){
      pjInfo[i].disabled = false
      pjInfo[i].style.display = 'block'
      pjInfo[i].value = ''
    }
    divPj.style.display = 'block'

    dummy.style.display = 'none'
  }

}


