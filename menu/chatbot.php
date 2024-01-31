<?php
$question = $_POST['question'];

// Aquí puedes agregar la lógica para generar respuestas del chatbot
// Por ejemplo, podrías usar un arreglo asociativo que mapee preguntas a respuestas
$answers = array(
    "Hola","hola" => "¡Hola! ¿En qué puedo ayudarte?",
    "¿Cómo estás?" => "Estoy bien, gracias por preguntar.",
    "Adiós","adios" => "¡Hasta luego!",
    

);

$response = isset($answers[$question]) ? $answers[$question] : "Lo siento, no entiendo esa pregunta.";
echo $response;
?>