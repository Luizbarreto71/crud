function confirmarAgendamento() {
    const medico = document.getElementById("medico").value;
    const data = document.getElementById("data").value;
    const horario = document.getElementById("horario").value;

    if (data && horario && medico) {
        alert("Por faavor,preencha todos os campos para confirmar o agendamento.");
        return;
    }
}