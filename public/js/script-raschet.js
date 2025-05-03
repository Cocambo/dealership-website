document.getElementById('credit').addEventListener('change', function() {
   const creditOptions = document.getElementById('creditOptions');
   creditOptions.style.display = this.value === 'yes' ? 'block' : 'none';
});

document.getElementById('calculateBtn').addEventListener('click', function() {
   const carPrice = parseFloat(document.getElementById('carPrice').value);
   const initialPayment = parseFloat(document.getElementById('initialPayment').value);
   const credit = document.getElementById('credit').value;
   if (carPrice == 0 || isNaN(carPrice))
   {
       document.getElementById('result').innerHTML = `<div class = "error-choose"> <p> Укажите цену автомобиля! <p> </div>`;
       document.getElementById('monthlyPayment').innerHTML = "";
       return;
   }
   else if (credit === 'no') {
       document.getElementById('result').innerHTML = `<div class = "total-cost"> 
       Итоговая цена автомобиля: ${carPrice - initialPayment} руб.
       </div>`;
       document.getElementById('monthlyPayment').innerHTML = "";
   } 
   else {
      const interestRate = parseFloat(document.getElementById('bank').value); // процентная ставка
        const loanTermMonths = parseInt(document.getElementById('loanTerm').value); // срок(месяц)

        if (isNaN(interestRate) || interestRate === 0) {
            document.getElementById('result').innerHTML = `<div class = "error-choose"> <p> Пожалуйста, выберите банк! <p> </div>`;
            document.getElementById('monthlyPayment').innerHTML = "";
            return;
        }

        const creditPrice = carPrice - initialPayment; // Сумма кредита без перв. взноса 
        const monthInterestRate = interestRate / 12 / 100;
        const monthlyPayment = creditPrice * ((monthInterestRate * Math.pow((1 + monthInterestRate), loanTermMonths)) / (Math.pow((1 + monthInterestRate), loanTermMonths) - 1)); // Ежемесячный платеж
        const totalPayment = monthlyPayment * loanTermMonths; // Ежемесячный платеж

        document.getElementById('result').innerHTML = `
        <div class = "total-cost">
         Итоговая сумма с учетом кредита: ${totalPayment.toFixed(2)} руб.
         </div>`;
        document.getElementById('monthlyPayment').innerHTML = `<div class="payment"> Ежемесячный платеж: ${monthlyPayment.toFixed(2)} руб.</div>`;
    }
});
