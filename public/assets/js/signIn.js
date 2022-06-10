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

let rg = new Cleave('#rg', {
  numericOnly: true,
  delimiters: ['.', '.', '-'],
  blocks: [2, 3, 3, 1],
  uppercase: true
});

let cnpj = new Cleave('#cnpj', {
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

function changePessoa() {
  
  let docs = document.getElementsByClassName('input-pf-pj')
  let pf = docs[0]
  let pj = docs[1]

  let pfDiv =  document.getElementById('div-pf')
  let pfInputs = document.getElementsByClassName('pf-inputs')

  let pjDiv = document.getElementById('div-pj')
  let pjInputs = document.getElementsByClassName('pj-inputs')

  if(pf.checked) {

    pfDiv.style.display = 'block'
    pjDiv.style.display = 'none'

    for(let i = 0; i < pfInputs.length; i++){
      pfInputs[i].disabled = false
    }

    for(let i = 0; i < pjInputs.length; i++){
      pjInputs[i].disabled = true
      pjInputs[i].value = ''
    }
    
  } else if (pj.checked) {
    pfDiv.style.display = 'none'
    pjDiv.style.display = 'block'

    for(let i = 0; i < pfInputs.length; i++){
      pfInputs[i].disabled = true
      pfInputs[i].value = ''
    }

    for(let i = 0; i < pjInputs.length; i++){
      pjInputs[i].disabled = false
      
    }
  }

}


