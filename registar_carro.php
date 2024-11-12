<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registar Carro</title>
</head>

<body>

    <?php

    include_once "connection.php"; //ligaçao com a connection.php //


    $marca = $_POST['marca']; //recebe a marca inserida na pagina ("vender.php") através do metodo post
    $modelo = $_POST['modelo'];
    $cilindrada = $_POST['cc'];
    $potencia = $_POST['cv'];
    $quilometros = $_POST['km'];
    $combustivel = $_POST['combustivel'];
    $ano = $_POST['ano'];
    $preco = $_POST['preco'];
    $observacoes = $_POST['obs'];
    $imagem= $_FILES['img']['name'];


    mysqli_select_db($connect, '$dbname');

    
    if (isset($_POST['btn_anunciar'])) {

            $target = 'img/' . $imagem; //local para onde envia a mensagem

            move_uploaded_file($_FILES['img']['tmp_name'], $target); //enviar a imagem com nome temporario
        
    }



    /*----------------------------------------------*/



    $sql = "INSERT INTO carro (marca,modelo,cilindrada,potencia,km,combustivel,ano,preco,observacoes,imagem) VALUES ('$marca','$modelo','$cilindrada','$potencia','$quilometros','$combustivel','$ano','$preco','$observacoes','$imagem')";

    if (mysqli_query($connect, $sql)) {
        echo "<script>alert('Dados do seu carro guardado!'); window.location = 'vender.php'; </script>"; //Dá o pop-up de uma janela a confirmar se guardou os dados
    } else {
        echo "Deu ERRO!!: " . $sql . "<br>" . mysqli_error($connect);
    }
    mysqli_close($connect);

     /*---------------------------------*/
    /*
    if (isset($_POST['btn_anunciar'])) {
        // conta o numero total de ficheiros
        $totalfiles = count($_FILES['img']['name']);

        // ciclo entre os ficheiros
        for ($i = 0; $i < $totalfiles; $i++) {
            $imagem= $_FILES['img']['name'][$i];
            $target='img/' . $imagem;
            // upload e guarda na base de dados
            if(move_uploaded_file($_FILES["img"]["tmp_name"][$i], $target)){
                
                $insert = "INSERT into imagem(id_carro,imagem) values('$id_carro','$imagem')";
                if(mysqli_query($connect, $insert)){
                echo 'Data inserted successfully';
                }
                else{
                echo 'Error: '.mysqli_error($connect);
                }
            }else{
                echo 'Error in uploading file - '.$_FILES['img']['name'][$i].'<br/>';
            } 
                
            
        }
    }Código não funcional tentativa de upload de multiplos ficheiros*/

    

   
    
    



    ?>
</body>

</html>