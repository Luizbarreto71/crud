const nodemailer = require ('nodemailer') ;

async function enviarEmailConfirmacao(email,nome,dataConsulta){
    let transporter = nodemailer.createTransport(({
        
    service :'gmail',
    auth :{
        user:'tue@exemple.com',
        pass:'333'
    }}
    )); 
    } 
    
    let info = await transporter.sendMail({
        from: '"Clinica" <feitosabarreto50@gmail.com>',
        to: email,
        subject: 'Confimação de Agendamento',
        Text:'Ola ${nome},sua consulta foi agendada para ${dataConsulta}.',
        html:'<b>Olá ${nome}</b><p>Sua consulta foi agendada para o dia <strong>${dataConsulta}</strong>.</p>',
    });

    console.log('Mensagem enviada: %s', info.messageId);



        
        
  