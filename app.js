document.getElementById('diyetForm').addEventListener('submit', function(e) {
    e.preventDefault();
    const kahvalti = document.getElementById('kahvalti').value;
    const ogleYemegi = document.getElementById('ogleYemegi').value;
    const aksamYemegi = document.getElementById('aksamYemegi').value;
  
    const planListesi = document.getElementById('planListesi');
    const yeniPlan = document.createElement('div');
    yeniPlan.innerHTML = `
      <h3>Günlük Diyet Planı</h3>
      <p><strong>Kahvaltı:</strong> ${kahvalti}</p>
      <p><strong>Öğle Yemeği:</strong> ${ogleYemegi}</p>
      <p><strong>Akşam Yemeği:</strong> ${aksamYemegi}</p>
    `;
    planListesi.appendChild(yeniPlan);
  
    document.getElementById('diyetForm').reset();
  });