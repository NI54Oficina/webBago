<?php function sanear_string($string)
{
 
    $string = trim($string);
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�', '�'),
        array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�', '�', '�', '�', '�'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );
 
    $string = str_replace(
        array('�', '�', '�', '�'),
        array('n', 'N', 'c', 'C'),
        $string
    );
 
    /*//Esta parte se encarga de eliminar cualquier caracter extra�o
    $string = str_replace(
        array("\", "�", "�", "-", "~",
             "#", "@", "|", "!", """,
             "�", "$", "%", "&", "/",
             "(", ")", "?", "'", "�",
             "�", "[", "^", "<code>", "]",
             "+", "}", "{", "�", "�",
             ">", "< ", ";", ",", ":",
             ".", " "),
        '',
        $string
    );*/
 
 
    return $string;
}

?>