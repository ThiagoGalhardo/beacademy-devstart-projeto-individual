<link rel="stylesheet" type="text/css" href="{{ url('css/form.css') }}">
@extends('template.index')
@section('title', 'Formulário IR')
@section('content')

<div class="container">

    <div class="card p-3 mt-5">

        <h3 class="text-center mt-5">Dados pessoais</h3>
        <hr>

        <form class="row g-3" method="POST">
            @csrf
            <div class="col-12">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Ex: José Silva">
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="example@example.com">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <label for="phone" class="form-label">Telefone</label>
                <input type="number" class="form-control" name="phone" id="phone" placeholder="Ex: (11) 98020-2030">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <label for="birthday" class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" name="birthday" id="birthday" placeholder="Ex: 50">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <label for="cpf" class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" id="cpf" placeholder="123.456.789-10">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <label for="doc-voter" class="form-label">Título de Eleitor</label>
                <input type="text" class="form-control" name="doc-voter" id="doc-voter" placeholder="0043 5687 09 06">
            </div>

            <div class="row g-3 mt-0">
                <div class="col-sm-12 col-md-3 col-lg-3">
                    <label for="zipcode" class="form-label">Cep</label>
                    <input type="text" class="form-control" name="zipcode" id="zipcode" placeholder="Ex: 17560246" onkeypress="$(this).mask('00000000')">
                </div>
            </div>

            <div class=" col-lg-6 col-md-6 col-sm-12">
                <label for="address" class="form-label">Endereço</label>
                <input type="text" class="form-control" name="address" id="address" placeholder="Rua das flores">
            </div>
            <div class="col-lg-2 col-md-2 col-sm-12">
                <label for="number-house" class="form-label">Número</label>
                <input type="text" class="form-control" name="number-house" id="number-house" placeholder="Ex: 50">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <label for="complement-house" class="form-label">Complemento</label>
                <input type="text" class="form-control" name="complement-house" id="complement-house" placeholder="Ex: Apto 105, bloco 2">
            </div>
            <div class="col-lg-3 col-md-3 col-sm-12">
                <label for="district" class="form-label">Bairro</label>
                <input type="text" class="form-control" name="district" id="district" placeholder="Ex: Paranaguá">
            </div>
            <div class="col-md-5">
                <label for="city" class="form-label">Cidade</label>
                <input type="text" class="form-control" name="city" id="city" placeholder="Ex: São Paulo">
            </div>
            <div class="col-lg-4 col-md-6">
                <label for="state" class="form-label">Estado</label>
                <select id="state" name="state" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="AC">Acre</option>
                    <option value="AL">Alagoas</option>
                    <option value="AP">Amapá</option>
                    <option value="AM">Amazonas</option>
                    <option value="BA">Bahia</option>
                    <option value="CE">Ceará</option>
                    <option value="DF">Distrito Federal</option>
                    <option value="ES">Espírito Santo</option>
                    <option value="GO">Goiás</option>
                    <option value="MA">Maranhão</option>
                    <option value="MT">Mato Grosso</option>
                    <option value="MS">Mato Grosso do Sul</option>
                    <option value="MG">Minas Gerais</option>
                    <option value="PA">Pará</option>
                    <option value="PB">Paraíba</option>
                    <option value="PR">Paraná</option>
                    <option value="PE">Pernambuco</option>
                    <option value="PI">Piauí</option>
                    <option value="RJ">Rio de Janeiro</option>
                    <option value="RN">Rio Grande do Norte</option>
                    <option value="RS">Rio Grande do Sul</option>
                    <option value="RO">Rondônia</option>
                    <option value="RR">Roraima</option>
                    <option value="SC">Santa Catarina</option>
                    <option value="SP">São Paulo</option>
                    <option value="SE">Sergipe</option>
                    <option value="TO">Tocantins</option>
                    <option value="EX">Estrangeiro</option>
                </select>
            </div>

            <div class="col-md-6 col-sm-12">
                <label for="change-address" class="form-label">Teve mudança de endereço em
                    @php
                    echo date('Y') -1;
                    @endphp?</label>
                <select id="change-address" name="change-address" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="col-md-6 col-sm-12">
                <label for="have-deficiency" class="form-label">Possui deficiência física ou mental?</label>
                <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Incluindo dependentes"> </i>
                <select id="have-deficiency" name="have-deficiency" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <!-- ============ End card Dados pessoais ============ -->
    </div>


    <!-- ============ Start card Dados complementares ============ -->

    <div class="card p-3 mt-3">

        <h3 class="text-center">Dados complementares</h3>
        <hr>

        <div class="row g-3">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="occupation" class="form-label">Profissão</label>
                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Ex: Analista de sistemas">
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="number-register" class="form-label">Nº do registro de classe (OAB, CRM...) </label>
                <input type="text" class="form-control" name="number-register" id="number-register">
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <label for="number-last-ir" class="form-label">Nº da ultima declaração do IR </label>
                <input type="text" class="form-control" name="number-last-ir" id="number-last-ir">
            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="haveSpouse" class="form-label">Cônjuge ou companheiro(a)? </label>
                <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Companheiro(a) com a qual o contribuinte tenha filho ou viva há mais de 5 anos, ou cônjuge"> </i>
                <select id="haveSpouse" name="haveSpouse" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="dataSpouse">

                <div class="col-12">
                    <label for="cpf-spouse" class="form-label">CPF do cônjuge ou companheiro(a)</label>
                    <input type="text" class="form-control" name="cpf-spouse" id="cpf-spouse" placeholder="123.456.789-10">
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="haveDependents" class="form-label">Dependentes? </label>

                <select id="haveDependents" name="haveDependents" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="dataDependents">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Atenção</strong>, o dependente não pode constar na declaração de outro contribuinte!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="col-12">
                    <label for="name-dependents" class="form-label">Nome do dependente</label>
                    <input type="text" class="form-control" name="name-dependents" id="name-dependents" placeholder="Ex: João da Silva">
                </div>

                <div class="col-12 mt-3">
                    <label for="cpf-dependents" class="form-label">CPF do dependente</label>
                    <input type="text" class="form-control" name="cpf-dependents" id="cpf-dependents" placeholder="123.456.789-10">
                </div>

                <div class="col-12 mt-3">
                    <label for="birth-dependents" class="form-label">Data de nascimento do dependente</label>
                    <input type="text" class="form-control" name="birth-dependents" id="birth-dependents" placeholder="Ex: 10/01/1990">
                </div>

                <div class="col-12 mt-3">
                    <label for="kinship-dependents" class="form-label">Grau de parentesco</label>
                    <input type="text" class="form-control" name="kinship-dependents" id="kinship-dependents" placeholder="Ex: Filho">
                </div>

                <div class="col-md-4 mt-3">
                    <label for="live-with-dependents" class="form-label">O dependente mora com você? </label>

                    <select id="live-with-dependents" name="live-with-dependents" class="form-select">
                        <option selected>Selecione...</option>
                        <option value="sim">Sim</option>
                        <option value="não">Não</option>
                    </select>
                </div>

            </div>


            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="haveFed" class="form-label">Alimentandos?</label>
                <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Pensão alimentícia, despesas médicas ou de instrução em razão de decisão judicial"> </i>
                <select id="haveFed" name="haveFed" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="dataFed">

                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Atenção</strong>, o alimentando não pode ser seu dependente!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

                <div class="col-12">
                    <label for="name-fed" class="form-label">Nome do alimentando</label>
                    <input type="text" class="form-control" name="name-fed" id="name-fed" placeholder="Ex: José Silva">
                </div>

                <div class="col-12">
                    <label for="cpf-fed" class="form-label">CPF do alimentando</label>
                    <input type="text" class="form-control" name="cpf-fed" id="cpf-fed" placeholder="123.456.789-10">
                </div>

                <div class="col-12 mt-3">
                    <label for="birth-fed" class="form-label">Data de nascimento do alimentando</label>
                    <input type="date" class="form-control" name="birth-fed" id="birth-fed" placeholder="Ex: 10/01/1990">
                </div>

            </div>


            <!-- ============ End card Dados complementares ============ -->
        </div>
    </div>


    <!-- ============ Start card Pagamentos efetuados ============ -->

    <div class="card p-3 mt-3">

        <h3 class="text-center">Pagamentos efetuados</h3>
        <hr>

        <div class="row g-3 ">

            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="haveMedicalExpenses" class="form-label">Despesas médicas? </label>
                <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Despesas com médico, clínica  ou odontologia ">
                </i>
                <select id="haveMedicalExpenses" name="haveMedicalExpenses" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="dataMedicalExpenses">

                <p>Informar nome do convênio/plano de saúde/plano odontológico CNPJ/CPF do prestador de serviço e valor pago <br> OBS: Gastos em particular com saúde em @php
                    echo date('Y')-1;
                    @endphp
                    (consultas, exames, tratamento odontológico, psicólogo) enviar o recibo/nota fiscal/comprovante
                    da despesa.
                </p>
                <div class="textarea-medical-expenses">
                    <textarea class="form-control" placeholder="Descreva aqui" name="textarea-medical-expenses" id="textarea-medical-expenses"></textarea>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="haveEducationExpenses" class="form-label">Despesas com educação/ instrução? </label>
                <select id="haveEducationExpenses" name="haveEducationExpenses" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>


            <div class="dataEducationExpenses">

                <p>OBS: Educação básica (educação infantil, ensino fundamental e médio, ensino superior ou educação profissional).
                    <br>Cursos de idiomas não são dedutíveis do IR.
                    <br>Informar nome da instituição, CNPJ e valor pago durante o ano de
                    @php
                    echo date('Y')-1;
                    @endphp.
                </p>
                <div class="textarea-education-expenses">
                    <textarea class="form-control " placeholder="Descreva aqui" name="textarea-education-expenses" id="textarea-education-expenses"></textarea>
                </div>

            </div>

            <div class="col-lg-4 col-md-6 col-sm-12">
                <label for="havePatrimony" class="form-label">Patrimônio? </label>
                <select id="havePatrimony" name="havePatrimony" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

            <div class="dataPatrimony">

                <p>Informar patrimônio (bens) em seu nome (casa, apartamento, terreno, carro, fundos de investimentos, etc.)
                    <br>Informar data da compra, valor pago, forma de pagamento e situação do pagamento em
                    @php
                    echo date('Y')-2;
                    @endphp
                    e
                    @php
                    echo date('Y')-1;
                    @endphp, matrícula, cartório de registro, endereço completo e área total do imóvel, número do RENAVAN e placa do carro.

                </p>
                <div class="textarea-patrimony">
                    <textarea class="form-control " placeholder="Descreva aqui" name="textarea-patrimony" id="textarea-patrimony"></textarea>
                </div>

            </div>

        </div>

        <!-- ============ End card Pagamentos efetuados ============ -->
    </div>

    <!-- ============ Start card Dados bancários ============ -->
    <div class="card p-3 mt-3">

        <h3 class="text-center">Dados bancários</h3>
        <hr>

        <div class="row g-3 ">

            <div class="col-12">
                <label for="bank" class="form-label">Banco</label>
                <input type="text" class="form-control" name="bank" id="bank" placeholder="Ex: Itau">
            </div>

            <div class="col-12 mt-3">
                <label for="bank-agency" class="form-label">Agencia</label>
                <input type="text" class="form-control" name="bank-agency" id="bank-agency" placeholder="1605">
            </div>

            <div class="col-12 mt-3">
                <label for="bank-number" class="form-label">Número da conta</label>
                <input type="text" class="form-control" name="bank-number" id="bank-number" placeholder="Ex: 36624-4">
            </div>

        </div>
        <!-- ============ End card Dados bancários ============ -->
    </div>

    <!-- ============ Start card============ -->
    <div class="card p-3 mt-3">

        <div class="row g-3">

            <div class="col-md-5">
                <label for="received-emergency-aid" class="form-label">Você ou algum dependente recebeu auxílio
                    emergencial em
                    @php
                    echo date('Y')-1;
                    @endphp?</label>
                <select id="received-emergency-aid" name="received-emergency-aid" class="form-select">
                    <option selected>Selecione...</option>
                    <option value="sim">Sim</option>
                    <option value="não">Não</option>
                </select>
            </div>

        </div>

        <!-- ============= end card ============ -->
    </div>

    <!-- ============ Start card Envio de documentos ============ -->
    <div class="card p-3 mt-3">

        <div class="row g-3">

            <h3 class="text-center">Envio de documentos</h3>
            <hr>

            <p> - Informe de rendimentos de salários, pró-labore, distribuição de lucros, aposentadoria ou pensão (do titular e dos dependentes se tiverem);<br> - Rendimentos de instituições financeiras, como bancos e corretora de investimentos;
                <br> - Rendimentos de aluguéis;<br> - Rendimentos como pensão alimentícia, doações e heranças;<br> - Resumo mensal do livro-caixa (se autônomo);<br> - Recibos de despesas médicas e odontológicas;<br> - Recibos de despesas com educação;<br> - Recibos/nota fiscal de serviços tomados de pessoas físicas;
                <br> - Documentos que comprove ônus e dívidas do ano a declarar, sejam eles pagos ou contraídos (ex: empréstimos)
                <br>
            </p>

            <div class="mb-3">
                <label for="file-upload" class="form-label">Envio de documentos</label>
                <input class="form-control" name="file-upload" type="file" enctype="multipart/form-data" id="file-upload" multiple>
            </div>

        </div>

        <!-- ============ End card Envio de documentos ============ -->
    </div>

    <div class="text-center">
        <button class="btn btn-primary mt-5 mb-5 px-5 py-2 btn-lg" type="submit">Finalizar
            Formulário</button>
    </div>

    </form>

</div>

@endsection

<style>
    .btn-primary {
        color: #f1f1f1 !important;
        background-color: #AB838B !important;
        border-color: #AB838B !important;
    }

    .btn-primary:hover {
        color: #f1f1f1 !important;
        background-color: #785259 !important;
        border-color: #785259 !important;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        box-shadow: 0 0 0 .2rem rgba(120, 82, 89, 0.5) !important;
    }
</style>

@section('scripts')
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script type="text/javascript" src="{{ asset('js/form.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
@stop
