<?php
	  require_once("application/libraries/dompdf/dompdf_config.inc.php");
	  
      $html = '<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	</head>
	<body>
		<div style="padding: 20px 40px 20px 40px">
			<div align="center">
				<h3><b>CONTRATO DE COMPRA E VENDA DE PACOTE PARA PARTICIPAÇÃO NO TORNEIO DAS ENGENHARIAS DO CENTRO OESTE 2015 IDENTIFICAÇÃO DAS PARTES CONTRATANTES</b></h3>
			</div>
			<div>
				<p>
					<b>CONTRATANTE:</b> <u>' . $dados_contratante -> nome . '</u>, inscrito no Cadastro de Pessoa Física sob o nº <u>' . $dados_contratante -> CPF . '</u> ' . 
					'Registro Geral nº <u>' . $dados_contratante -> RG . '</u> org. expedidor <u>' . strtoupper($dados_contratante -> orgao_expeditor) . '</u> nascido em <u>' . date('d/m/Y', strtotime($dados_contratante -> data_nascimento)) . 
					'</u> residente e domiciliado na <u>' . $dados_contratante -> endereco_rua . '</u>, nº <u>' . $dados_contratante -> endereco_numero . '</u>, Apto. <u>' . $dados_contratante -> endereco_apto . '</u>, Bairro <u>' . $dados_contratante -> endereco_bairro . 
					'</u>, CEP: <u>' . $dados_contratante -> endereco_cep . '</u>, Cidade de <u>' . $dados_contratante -> endereco_cidade . ' - ' . strtoupper($dados_contratante -> endereco_uf) . '</u>, com RGA nº <u>' . $dados_contratante -> rga .
					'</u>, no curso de <u>' . $dados_contratante -> curso . '</u>, e-mail <u>' . $dados_contratante -> email . '</u>, telefone residencial <u>' . $dados_contratante -> tel_residencial  . '</u>, telefone celular <u>' . $dados_contratante -> tel_celular .
					'</u>, neste ato denominado de <b>PARTICIPANTE</b>.' .
				'</p> 
				<p><b>
					OBS: Caso o participante não seja acadêmico das Engenharias da UFMT esse participará do evento como CONVIDADO e um acadêmico será responsável pelo mesmo, assim os dois sofreram punições em caso descumprimento do contrato.
				</b></p> 
			</div>		
			<div>
				<table width="100%">
					<tr>
						<td width="80%"><p><b style="padding-right: 5px;">ACADÊMICO RESPONSÁVEL: </b>_____________________________________</p></td>
						<td width="20%"><p><b style="padding-right: 5px;">SEM:</b>__________</p></td>
					</tr>
				</table>
			</div>
			<div>
				<p>
					<b>CONTRATADO</b>: VICTOR HUGO FRASSETTO SMERDECH,  inscrito no Cadastro de Pessoa Física sob o nº 032.135.411-76, residente e domiciliado na 
					AVENIDA ITAPARICA, nº 244, Apto. _______, Bairro COOPHEMA, CEP: 78085-100, Cidade de CUIABÁ, Estado de MATO GROSSO, endereço eletrônico 
					victorhfsmerdech@gmail.com, telefone residencial (____) _________________________, telefone celular (65) 8138-9006, neste ato denominado de <b>DIRIGENTE</b>. 
				</p>
			</div>
			<div>
				<p>
					<b>Cláusula 1ª</b> - O presente contrato refere-se à venda de pacote de lote único, no valor de R$ ____________ (______________________________________________), 
					o qual será dividido em parcelas fixas e iguais de R$___________ (____________________________________________), que serão pagas da seguinte forma:
					<ul>
						<li>À Vista: Dinheiro (  )
							<table width="100%">
								<tr>
									<td width="10.5%"></td>
									<td width="89.5%">Transferência Bancária (  )</td>
								</tr>
								<tr>
									<td width="10.5%"></td>
									<td width="89.5%">Depósito Bancário (  )</td>
								</tr>
							</table>
						</li>
						<li>Crédito em: <span style="padding-right: 15px">1X (  )</span>4X (  )
							<table width="100%">
								<tr>
									<td width="15%"></td>
									<td width="9.3%">2X (  )</td>
									<td width="75.7%">5X (  )</td>
								</tr>	
								<tr>
									<td width="15%"></td>
									<td width="9.3%">3X (  )</td>
									<td width="75.7%">6X (  )</td>
								</tr>				
							</table>
						</li>
					</ul> 
				</p>
			</div>
			<div>
				<p><b>DA EXPULSÃO DO EVENTO</b></p>
			</div>
			<div>
				<p>
					<b>Cláusula 2ª</b> - É terminantemente proibido e terá como penalidade a expulsão imediata do evento no ano em questão e por mais 
					três anos consecutivos o <b>PARTICIPANTE</b> que incorrer em quaisquer dos itens listados abaixo:
					<ul>
						<li>Brigas de qualquer natureza;</li>
						<li>Vandalismo contra o patrimônio dos Ônibus, cidade sede e/ou espaço do evento;</li>
						<li>Brincadeiras com fogos de artifício, rojões ou qualquer tipo de material inflamável ou com pólvora;</li>
						<li>Danos ao patrimônio público e sociedade;</li>
						<li>Dentre outros casos específicos que serão analisados individualmente através dos <b>Dirigentes</b>.</li>
					</ul> 
				</p>
				<p>
					<b>Cláusula 3ª</b> - Cada inscrito será inteiramente responsável pela manutenção e correta utilização do local de hospedagem. 
					Qualquer dano causado pelo inscrito durante os jogos, festas, nas dependências do alojamento ou fora delas é de sua inteira 
					e exclusiva responsabilidade, ficando a Atlética isenta de qualquer responsabilidade. 
				</p>
			</div>
			<div>
				<p><b>DA DESISTÊNCIA DO CONTRATO</b></p>				
			</div>
			<div>
				<p>
					<b>Cláusula 4ª</b> - Conforme a disposição legal neste sentido poderá o <b>PARTICIPANTE</b> exercer seu direito de arrependimento, por escrito, 
					até 7 dias após a aceitação do presente contrato, lhe sendo devolvido todo o valor pago. Quando a data da assinatura do presente contrato 
					for inferior a 7 dias da data do início da viagem, a devolução será dos valores não pagos aos fornecedores. 
				</p>
				<p>
					<b>Cláusula 5ª</b> - Períodos superiores ao acima e inferiores a 15 dias do evento (ou realização da viagem, o que for primeiro) serão devolvidos 30% do valor,
					sendo os outros 70% destinados a pagamento de serviços e produtos contratados. 
				</p>
			</div>
			<div>
				<p><b>DAS DISPOSIÇÕES FINAIS</b></p>
			</div>	
			<div>
				<p>
					<b>Cláusula 6ª</b> - Os dados constantes neste contrato poderão fazer parte do banco de dados da Liga Esportiva das Engenharias do Centro-Oeste, das suas Atléticas e de seus patrocinadores. 
				</p>
				<p>
					<b>Cláusula 7ª</b> - A Associação Atlética Acadêmica reserva-se o direito de cancelar as inscrições realizadas, realizando a devolução dos valores referentes à estas, caso não ocorra o número mínimo
					de inscrições necessárias à realização do evento. 
				</p>
				<p>
					<b>Cláusula 8ª</b> - O <b>PARTICIPANTE</b> que assinar o presente contrato declara estar ciente do regulamento do evento, assumindo toda e qualquer responsabilidade cível e/ou criminal, por qualquer motivo que venha 
					a ocorrer, do tipo incidente ou acidente que possa causar a terceiros ou a sua pessoa. 
				</p>
			</div>
			<div style="padding-top: 15px">
				<p>________________________, _______ de ____________________de __________.</p>
			</div>
			<div style="padding-top: 20px">
				<table width="100%">
					<tr>
						<td width="50%" align="center">___________________________________</td>
						<td width="50%" align="center">___________________________________</td>
					</tr>
					<tr>
						<td width="50%" align="center"><b>Dirigente AAAE UFMT</b></td>
						<td width="50%" align="center"><b>PARTICIPANTE</b></td>
					</tr>
					<
				</table>
			</div>
			<div style="padding-top: 20px">
				<table width="100%">
					<tr>
						<td height="30px"><b>Testemunha:</b><td>						
					</tr>
					<tr>
						<td height="20px"><b>1:___________________________________</b></td>	
					</tr>	
					<tr>
						<td><b>RG:</b></td>	
					</tr>				
				</table>						
			</div>
		</div>
	</body>
</html>';    
      
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->set_paper('a4', 'portrait');
     $dompdf->render();
     $dompdf->stream("Contrato TECO.pdf");
?>