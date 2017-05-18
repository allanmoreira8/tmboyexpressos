$(window).load(function() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').hide();
});

function cliquelogo() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').hide();
    $('#paginainicial').show();
}

function cliquebotaohome() {
    $('#home').show();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').hide();
    $('#paginainicial').hide();
}

function cliquebotaovantagens() {
    $('#home').hide();
    $('#vantagens').show();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').hide();
    $('#paginainicial').hide();
}

function cliquebotaoservicos() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').show();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').hide();
    $('#paginainicial').hide();
}

function cliquebotaocontratos() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').show();
    $('#tabela').hide();
    $('#faleconosco').hide();
    $('#paginainicial').hide();
}

function cliquebotaotabela() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').show();
    $('#faleconosco').hide();
    $('#paginainicial').hide();
}

function cliquebotaofaleconosco() {
    $('#home').hide();
    $('#vantagens').hide();
    $('#servicos').hide();
    $('#contratos').hide();
    $('#tabela').hide();
    $('#faleconosco').show();
    $('#paginainicial').hide();
}