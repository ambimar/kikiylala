<?php
function catalogo_completo(): array
{
    return [

        [
            "id" => 1,
            "categoria" => "makeup",
            "producto" => "Labial matte",
            "marca" => "Dragon Renee",
            "descripcion" => "Marca japonesa
            intransferibles.
            Precio por unidad",
            "portada" => "labialmateDragonRene.webp",
            "precio" => 1200
        ],
        [
            "id" => 2,
            "producto" => "Gel tint",
            "categoria" => "makeup",
            "marca" => "MELU by Ruby Rose",
            "descripcion" => "Tinta para labios
            Super pigmentado
            Tonos en segunda foto",
            "portada" => "labiaelesmelugeltint.webp",
            "precio" => 2700
        ],
        [
            "id" => 3,
            "categoria" => "makeup",
            "producto" => "Delineador en fibra",
            "marca" => "MELU by Ruby Rose",
            "descripcion" => "Color negro
            Resistente al agua
            Punta fina",
            "portada" => "delineadoresMelu.webp",
            "precio" => 2100
        ],
        [
            "id" => 4,
            "categoria" => "makeup",
            "producto" => "Sombras",
            "marca" => "FLOWER ushas",
            "descripcion" => "Paleta con 4 tonos
            Incluye 3 colores matte/opaco y 1 satinado/brillo
            2 tipos de paletas, ver fotos",
            "portada" => "sombrasflower.webp",
            "precio" => 2100
        ],
        [
            "id" => 5,
            "categoria" => "makeup",
            "producto" => "Povo de Hadas",
            "marca" => "Favourbeauty",
            "descripcion" => "Para las amantes del brillo
            Viral en Tik Tok",
            "portada" => "polvodehadas.jpg",
            "precio" => 2200
        ],
        [
            "id" => 6,
            "categoria" => "skincare",
            "producto" => "Espuma de limpieza facial ",
            "marca" => "MELY",
            "descripcion" => "Reemplaza tu desmaquillante por algo más sano para tu piel
          Apta para piel sensible",
            "portada" => "limpieza.jpg",
            "precio" => 4400
        ],
        [
            "id" => 7,
            "categoria" => "skincare",
            "producto" => "Bálsamo labial de Ositos",
            "marca" => "Marca no encontrada",
            "descripcion" => "Con aloe vera. Ultra hidratantes",
            "portada" => "balsamolabialdeosito.jpg",
            "precio" => 2100
        ],
        [
            "id" => 8,
            "categoria" => "skincare",
            "producto" => "Gel hidratante ",
            "marca" => "Kaliya Beauty",
            "descripcion" => "Con Aloe vera y Rosa
          Gel transparente, sin dejar sensación grasosa.
          También sirve como prebase",
            "portada" => "gelhidratante.jpeg",
            "precio" => 2800
        ],
        [
            "id" => 9,
            "categoria" => "skincare",
            "producto" => "Mascarillas faciales",
            "marca" => "Chovemoar",
            "descripcion" => "❕4 modelos distintos
           ❕Mascarillas hidratantes",
            "portada" => "mascarafacialconanimales.webp",
            "precio" => 800
        ],
        [
            "id" => 10,
            "categoria" => "skincare",
            "producto" => "Combo skincare",
            "marca" => "Marcas No encontradas",
            "descripcion" => "❕Incluye una silicona hidratante para labios y un par de siliconas hidratantes para ojeras",
            "portada" => "comboskincare.webp",
            "precio" => 700
        ],
        [
            "id" => 11,
            "categoria" => "accesorios",
            "producto" => "Esponjas de maquillaje",
            "marca" => "Sin marca especifica",
            "descripcion" => "Utilizar la esponja previamente humedecida para mejor uso
            Varios colores disponibles",
            "portada" => "esponjas.webp",
            "precio" => 750
        ],
        [
            "id" => 12,
            "categoria" => "accesorios",
            "producto" => "Brochas de ojos",
            "marca" => "Paris Night",
            "descripcion" => "Brochas para ojos
            2 modelos:
            !Brocha para aplicar sombras
            !Brocha para difuminar",
            "portada" => "brocha.jpg",
            "precio" => 2000
        ],
        [
            "id" => 13,
            "categoria" => "accesorios",
            "producto" => "Gel de cejas/pestañas transparente",
            "marca" => "Keliya Beauty",
            "descripcion" => "Fija tus cejas y pestañas dejando un acabado natural",
            "portada" => "geldecejas.jpg",
            "precio" => 1900
        ],

    ];
}

function catalogo_x_objetos(string $objetos): array
{
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if ($p["categoria"] == $objetos) {
            $resultado[] = $p;
        }
    }

    return $resultado;
}

function producto_x_id(int $idProducto)
{
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if ($p['id'] == $idProducto) {
            return $p;
        }
    }
    return null;
}

function catalogo_todos_objetos(): array
{
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        $resultado[] = $p;
    }

    return $resultado;
}

function producto_destacado() : array {
    $resultado = [];
    $catalogo = catalogo_completo();

    foreach ($catalogo as $p) {
        if($p['destacado'] ?? false){
            $resultado[] = $p;
    }
    }

    return $resultado;

}