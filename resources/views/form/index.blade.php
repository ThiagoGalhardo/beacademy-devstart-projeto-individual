<link rel="stylesheet" type="text/css" href="{{ url('css/form.css') }}">
@extends('template.index')
@section('title', 'Formulário IR')
@section('content')

<div class="container">

    @if($errors->any())
    <div class="mt-5 pt-5">
        <div class="alert alert-danger pt-3">
            @foreach($errors->all() as $error)
            {{$error}}<br>
            @endforeach
        </div>
    </div>
    @endif


    <form class="g-3 needs-validation" action=" {{route('form.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="card p-3 mt-5">

            <div class="mt-5">
                <h3 class="text-center mt-5">Dados pessoais</h3>
                <hr>
            </div>

            <div class="row g-3">

                <div class="col-12">
                    <label for="name" class="form-label">Nome</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Ex: José Silva" value="{{ old('name') }}">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-12">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="example@example.com" value="{{ old('email') }}">
                    @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="phone" class="form-label">Telefone</label>
                    <input type="number" class="form-control  @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Ex: (11) 98020-2030" value="{{ old('phone') }}">
                    @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="birthday" class="form-label">Data de nascimento</label>
                    <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" id="birthday" placeholder="Ex: 50" value="{{ old('birthday') }}">
                    @error('birthday')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="cpf" class="form-label">CPF</label>
                    <input type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" id="cpf" placeholder="123.456.789-10" value="{{ old('cpf') }}">
                    @error('cpf')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class=" col-lg-3 col-md-3 col-sm-12">
                    <label for="doc_voter" class="form-label">Título de Eleitor</label>
                    <input type="text" class="form-control @error('doc_voter') is-invalid @enderror" name="doc_voter" id="doc_voter" placeholder="0043 5687 09 06" value="{{ old('doc_voter') }}">
                    @error('doc_voter')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="row g-3 mt-0">
                    <div class="col-sm-12 col-md-3 col-lg-3">
                        <label for="zipcode" class="form-label">Cep</label>
                        <input type="text" class="form-control @error('zipcode') is-invalid @enderror" name="zipcode" id="zipcode" placeholder="Ex: 17560246" onkeypress="$(this).mask('00000000')" value="{{ old('zipcode') }}">
                        @error('zipcode')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <div class=" col-lg-6 col-md-6 col-sm-12">
                    <label for="address" class="form-label">Endereço</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" id="address" placeholder="Rua das flores" value="{{ old('address') }}">
                    @error('address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12">
                    <label for="number_house" class="form-label">Número</label>
                    <input type="text" class="form-control @error('number_house') is-invalid @enderror" name="number_house" id="number_house" placeholder="Ex: 50" value="{{ old('number_house') }}">
                    @error('number_house')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <label for="complement_house" class="form-label">Complemento</label>
                    <input type="text" class="form-control" name="complement_house" id="complement_house" placeholder="Ex: Apto 105, bloco 2" value="{{ old('complement_house') }}">
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12">
                    <label for="district" class="form-label">Bairro</label>
                    <input type="text" class="form-control @error('district') is-invalid @enderror" name="district" id="district" placeholder="Ex: Paranaguá" value="{{ old('district') }}">
                    @error('district')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-md-5">
                    <label for="city" class="form-label">Cidade</label>
                    <input type="text" class="form-control @error('district') is-invalid @enderror" name="city" id="city" placeholder="Ex: São Paulo" value="{{ old('city') }}">
                    @error('city')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6">
                    <label for="state" class="form-label">Estado</label>
                    <select id="state" name="state" class="form-select" value="{{ old('state') }}">
                        <option selected>Selecione...</option>
                        <option value="AC" @if (old('state')=='AC' ) {{ 'selected' }} @endif>Acre</option>
                        <option value="AL" @if (old('state')=='AL' ) {{ 'selected' }} @endif>Alagoas</option>
                        <option value="AP" @if (old('state')=='AP' ) {{ 'selected' }} @endif>Amapá</option>
                        <option value="AM" @if (old('state')=='AM' ) {{ 'selected' }} @endif>Amazonas</option>
                        <option value="BA" @if (old('state')=='BA' ) {{ 'selected' }} @endif>Bahia</option>
                        <option value="CE" @if (old('state')=='CE' ) {{ 'selected' }} @endif>Ceará</option>
                        <option value="DF" @if (old('state')=='DF' ) {{ 'selected' }} @endif>Distrito Federal</option>
                        <option value="ES" @if (old('state')=='ES' ) {{ 'selected' }} @endif>Espírito Santo</option>
                        <option value="GO" @if (old('state')=='GO' ) {{ 'selected' }} @endif>Goiás</option>
                        <option value="MA" @if (old('state')=='MA' ) {{ 'selected' }} @endif>Maranhão</option>
                        <option value="MT" @if (old('state')=='MT' ) {{ 'selected' }} @endif>Mato Grosso</option>
                        <option value="MS" @if (old('state')=='MS' ) {{ 'selected' }} @endif>Mato Grosso do Sul</option>
                        <option value="MG" @if (old('state')=='MG' ) {{ 'selected' }} @endif>Minas Gerais</option>
                        <option value="PA" @if (old('state')=='PA' ) {{ 'selected' }} @endif>Pará</option>
                        <option value="PB" @if (old('state')=='PB' ) {{ 'selected' }} @endif>Paraíba</option>
                        <option value="PR" @if (old('state')=='PR' ) {{ 'selected' }} @endif>Paraná</option>
                        <option value="PE" @if (old('state')=='PE' ) {{ 'selected' }} @endif>Pernambuco</option>
                        <option value="PI" @if (old('state')=='PI' ) {{ 'selected' }} @endif>Piauí</option>
                        <option value="RJ" @if (old('state')=='RJ' ) {{ 'selected' }} @endif>Rio de Janeiro</option>
                        <option value="RN" @if (old('state')=='RN' ) {{ 'selected' }} @endif>Rio Grande do Norte</option>
                        <option value="RS" @if (old('state')=='RS' ) {{ 'selected' }} @endif>Rio Grande do Sul</option>
                        <option value="RO" @if (old('state')=='RO' ) {{ 'selected' }} @endif>Rondônia</option>
                        <option value="RR" @if (old('state')=='RR' ) {{ 'selected' }} @endif>Roraima</option>
                        <option value="SC" @if (old('state')=='SC' ) {{ 'selected' }} @endif>Santa Catarina</option>
                        <option value="SP" @if (old('state')=='SP' ) {{ 'selected' }} @endif>São Paulo</option>
                        <option value="SE" @if (old('state')=='SE' ) {{ 'selected' }} @endif>Sergipe</option>
                        <option value="TO" @if (old('state')=='TO' ) {{ 'selected' }} @endif>Tocantins</option>
                    </select>
                </div>

                <div class="col-md-6 col-sm-12">
                    <label for="change_address" class="form-label">Teve mudança de endereço em
                        @php
                        echo date('Y') -1;
                        @endphp?</label>
                    <select id="change_address" name="change_address" class="form-select @error('change_address') is-invalid @enderror" value="{{ old('change_address') }}">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('change_address')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('change_address')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('change_address')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-md-6 col-sm-12">
                    <label for="have_deficiency" class="form-label">Possui deficiência física ou mental?</label>
                    <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Incluindo dependentes"> </i>
                    <select id="have_deficiency" name="have_deficiency" class="form-select @error('have_deficiency') is-invalid @enderror" value="{{ old('have_deficiency') }}">
                        <option selected>Selecione...</option>
                        <option value="sim" value="sim" @if (old('have_deficiency')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" value="sim" @if (old('have_deficiency')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('have_deficiency')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

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
                    <input type="text" class="form-control @error('occupation') is-invalid @enderror" name="occupation" id="occupation" placeholder="Ex: Analista de sistemas" value="{{ old('occupation') }}">
                    @error('occupation')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="number_register" class="form-label">Nº do registro de classe (OAB, CRM...) </label>
                    <input type="text" class="form-control" name="number_register" id="number_register" value="{{ old('number_register') }}">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <label for="number_last_ir" class="form-label">Nº da ultima declaração do IR </label>
                    <input type="text" class="form-control" name="number_last_ir" id="number_last_ir" value="{{ old('number_last_ir') }}">
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label for="haveSpouse" class="form-label">Cônjuge ou companheiro(a)? </label>
                    <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Companheiro(a) com a qual o contribuinte tenha filho ou viva há mais de 5 anos, ou cônjuge"> </i>
                    <select id="haveSpouse" name="haveSpouse" class="form-select @error('haveSpouse') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('haveSpouse')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('haveSpouse')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('haveSpouse')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="dataSpouse">

                    <div class="col-12">
                        <label for="cpf_spouse" class="form-label">CPF do cônjuge ou companheiro(a)</label>
                        <input type="text" class="form-control" name="cpf_spouse" id="cpf_spouse" placeholder="123.456.789-10" value="{{ old('cpf_spouse') }}">
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label for="haveDependents" class="form-label">Dependentes? </label>

                    <select id="haveDependents" name="haveDependents" class="form-select @error('haveDependents') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('haveDependents')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('haveDependents')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('haveDependents')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="dataDependents">

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Atenção</strong>, o dependente não pode constar na declaração de outro contribuinte!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="col-12">
                        <label for="name_dependents" class="form-label">Nome do dependente</label>
                        <input type="text" class="form-control" name="name_dependents" id="name_dependents" placeholder="Ex: João da Silva" value="{{ old('name_dependents') }}">



                    </div>

                    <div class="col-12 mt-3">
                        <label for="cpf_dependents" class="form-label">CPF do dependente</label>
                        <input type="text" class="form-control" name="cpf_dependents" id="cpf_dependents" placeholder="123.456.789-10" value="{{ old('cpf_dependents') }}">
                    </div>

                    <div class="col-12 mt-3">
                        <label for="birth_dependents" class="form-label">Data de nascimento do dependente</label>
                        <input type="date" class="form-control" name="birth_dependents" id="birth_dependents" placeholder="Ex: 10/01/1990" value="{{ old('birth_dependents') }}">
                    </div>

                    <div class="col-12 mt-3">
                        <label for="kinship_dependents" class="form-label">Grau de parentesco</label>
                        <input type="text" class="form-control" name="kinship_dependents" id="kinship_dependents" placeholder="Ex: Filho" value="{{ old('kinship_dependents') }}">
                    </div>

                    <div class="col-md-4 mt-3">
                        <label for="live_with_dependents" class="form-label">O dependente mora com você? </label>

                        <select id="live_with_dependents" name="live_with_dependents" class="form-select">
                            <option selected>Selecione...</option>
                            <option value="sim" @if (old('live_with_dependents')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                            <option value="não" @if (old('live_with_dependents')=='não' ) {{ 'selected' }} @endif>Não</option>
                        </select>
                    </div>

                </div>


                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label for="haveFed" class="form-label">Alimentandos?</label>
                    <i class="bi bi-question-circle text-primary" data-bs-placement="right" data-bs-toggle="tooltip" data-bs-custom-class="custom-tooltip" title="Pensão alimentícia, despesas médicas ou de instrução em razão de decisão judicial"> </i>
                    <select id="haveFed" name="haveFed" class="form-select  @error('haveFed') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('haveFed')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('haveFed')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('haveFed')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="dataFed">

                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <strong>Atenção</strong>, o alimentando não pode ser seu dependente!
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                    <div class="col-12">
                        <label for="name_fed" class="form-label">Nome do alimentando</label>
                        <input type="text" class="form-control" name="name_fed" id="name_fed" placeholder="Ex: José Silva" value="{{ old('name_fed') }}">
                    </div>

                    <div class="col-12">
                        <label for="cpf_fed" class="form-label">CPF do alimentando</label>
                        <input type="text" class="form-control" name="cpf_fed" id="cpf_fed" placeholder="123.456.789-10" value="{{ old('cpf_fed') }}">
                    </div>

                    <div class="col-12 mt-3">
                        <label for="birth_fed" class="form-label">Data de nascimento do alimentando</label>
                        <input type="date" class="form-control" name="birth_fed" id="birth_fed" placeholder="Ex: 10/01/1990" value="{{ old('birth_fed') }}">
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
                    <select id="haveMedicalExpenses" name="haveMedicalExpenses" class="form-select @error('haveMedicalExpenses') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('haveMedicalExpenses')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('haveMedicalExpenses')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('haveMedicalExpenses')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="dataMedicalExpenses">

                    <p>Informar nome do convênio/plano de saúde/plano odontológico CNPJ/CPF do prestador de serviço e valor pago <br> OBS: Gastos em particular com saúde em @php
                        echo date('Y')-1;
                        @endphp
                        (consultas, exames, tratamento odontológico, psicólogo) enviar o recibo/nota fiscal/comprovante
                        da despesa.
                    </p>
                    <div class="textarea_medical_expenses">
                        <textarea class="form-control" placeholder="Descreva aqui" name="textarea_medical_expenses" id="textarea_medical_expenses">{{ old('textarea_medical_expenses') }}</textarea>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label for="haveEducationExpenses" class="form-label">Despesas com educação/ instrução? </label>
                    <select id="haveEducationExpenses" name="haveEducationExpenses" class="form-select @error('haveEducationExpenses') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('haveEducationExpenses')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('haveEducationExpenses')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('haveEducationExpenses')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>


                <div class="dataEducationExpenses">

                    <p>OBS: Educação básica (educação infantil, ensino fundamental e médio, ensino superior ou educação profissional).
                        <br>Cursos de idiomas não são dedutíveis do IR.
                        <br>Informar nome da instituição, CNPJ e valor pago durante o ano de
                        @php
                        echo date('Y')-1;
                        @endphp.
                    </p>
                    <div class="textarea_education_expenses">
                        <textarea class="form-control " placeholder="Descreva aqui" name="textarea_education_expenses" id="textarea_education_expenses">{{ old('textarea_education_expenses') }}</textarea>
                    </div>

                </div>

                <div class="col-lg-4 col-md-6 col-sm-12">
                    <label for="havePatrimony" class="form-label">Patrimônio? </label>
                    <select id="havePatrimony" name="havePatrimony" class="form-select @error('havePatrimony') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('havePatrimony')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('havePatrimony')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('havePatrimony')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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
                    <div class="textarea_patrimony">
                        <textarea class="form-control " placeholder="Descreva aqui" name="textarea_patrimony" id="textarea_patrimony">{{ old('textarea_patrimony') }}</textarea>
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
                    <input type="text" class="form-control @error('bank') is-invalid @enderror" name="bank" id="bank" placeholder="Ex: Itau" value="{{ old('bank') }}">
                    @error('bank')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12 mt-3">
                    <label for="bank_agency" class="form-label">Agencia</label>
                    <input type="text" class="form-control @error('bank_agency') is-invalid @enderror" name="bank_agency" id="bank_agency" placeholder="Ex: 1605" value="{{ old('bank_agency') }}">
                    @error('bank_agency')
                    <div class=" invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="col-12 mt-3">
                    <label for="bank_number" class="form-label">Número da conta</label>
                    <input type="text" class="form-control  @error('bank_number') is-invalid @enderror" name="bank_number" id="bank_number" placeholder="Ex: 36624-4" value="{{ old('bank_number') }}">
                    @error('bank_number')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

            </div>
            <!-- ============ End card Dados bancários ============ -->
        </div>

        <!-- ============ Start card============ -->
        <div class="card p-3 mt-3">

            <div class="row g-3">

                <div class="col-md-5">
                    <label for="received_emergency_aid" class="form-label">Você ou algum dependente recebeu auxílio
                        emergencial em
                        @php
                        echo date('Y')-1;
                        @endphp?</label>
                    <select id="received_emergency_aid" name="received_emergency_aid" class="form-select  @error('received_emergency_aid') is-invalid @enderror">
                        <option selected>Selecione...</option>
                        <option value="sim" @if (old('received_emergency_aid')=='sim' ) {{ 'selected' }} @endif>Sim</option>
                        <option value="não" @if (old('received_emergency_aid')=='não' ) {{ 'selected' }} @endif>Não</option>
                    </select>
                    @error('received_emergency_aid')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
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

                    <div class="input-group destroy control-group lst increment">
                        <input type="file" name="filenames[]" class="myfrm form-control">
                        <div class="input-group-btn">
                            <button class="btn btn-success ml-3" type="button"><i class="icon-plus"></i>Adicionar mais aquivos</button>
                        </div>
                    </div>
                    <div class="clone hide">
                        <div class="destroy control-group lst input-group" style="margin-top:10px">
                            <input type="file" name="filenames[]" class="myfrm form-control">
                            <div class="input-group-btn">
                                <button class="btn btn-danger" type="button"><i class="icon-remove"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                </div>






                <!-- <div class="mb-3">
                <label for="file-upload" class="form-label">Envio de documentos</label>
                <input class="form-control" name="files-upload[]" type="file" enctype="multipart/form-data" id="files" multiple>



            </div> -->

            </div>

            <!-- ============ End card Envio de documentos ============ -->
        </div>

        <div class="text-center">
            <!-- <a href="" class="btn btn-primary mt-5 mb-5 px-5 py-2 btn-lg" type="submit">Finalizar
                Formulário</a> -->
            <button class="btn btn-primary mt-5 mb-5 px-5 py-2 btn-lg" type="submit">Finalizar
                Formulário</button>

        </div>

    </form>

</div>


@endsection

<!-- Turn all file input elements into ponds -->

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
