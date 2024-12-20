const getElement = document.getElementById("loginForm");

getElement.addEventListener("submit", async function (event) {
  event.preventDefault();

  const cpf = document.getElementById('cpf').value;
  const password = document.getElementById('senha').value;
  const feedback = document.getElementById('loginFeedback');

  const data = {
    cpf,
    password
  };

  try {
    const response = await fetch('https://platech-b2bf5ba2cfc9.herokuapp.com/users/login', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify(data)
    });

    const result = await response.json();

    if (response.ok && result.success) {
      localStorage.setItem('authToken', result.jwt);
      feedback.textContent = "Login realizado com sucesso!";
      feedback.style.color = "green";
      setTimeout(() => {
        window.location.href = "src/pagina-inicial/pagina-inicial.html";
      }, 2000);
    } else {
      feedback.textContent = result.message || "CPF ou senha incorretos.";
      feedback.style.color = "red";
    }
  } catch (error) {
    console.error("Erro na requisição:", error);
    feedback.textContent = "Falha ao conectar com a API.";
    feedback.style.color = "red";
  }
});

const cpfInput = document.getElementById('cpf');
cpfInput.addEventListener('keypress', () => {
  let cpfLength = cpfInput.value.length;

  if (cpfLength === 3 || cpfLength === 7) {
    cpfInput.value += '.';
  } else if (cpfLength === 11) {
    cpfInput.value += '-';
  }
});
