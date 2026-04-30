<?php
// === LÓGICA PHP (API INTERNA) ===
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    $action = $_POST['action'] ?? '';
    
    // 1. CONDICIONAL
    if ($action === 'condicional') {
        $nombre = $_POST['nombre'] ?? '';
        $apellido = $_POST['apellido'] ?? '';
        $edad = $_POST['edad'] ?? '';
        $postre = $_POST['postre'] ?? '';
        
        if ($nombre == "Karla" && $apellido == "Jiménez" && $edad == 20 && $postre == 1) {
            echo json_encode(["status" => "success", "message" => "¡Eres la persona correcta! 💖"]);
        } else {
            echo json_encode(["status" => "error", "message" => "No eres la persona adecuada... o te equivocaste en un dato 💔"]);
        }
        exit;
    }
    
    // 2. BUCLES
    if ($action === 'bucle') {
        $cantidad = (int)($_POST['cantidad'] ?? 0);
        $html = '';
        if($cantidad > 0 && $cantidad <= 100){
            for ($i = 1; $i <= $cantidad; $i++) {
                $delay = min($i * 50, 1000); // Límite de delay para AOS
                $html .= "
                <div class='col-auto mb-3' data-aos='zoom-in' data-aos-delay='$delay'>
                    <div class='card glass-card text-center p-2' style='border: none; background: rgba(255,255,255,0.2);'>
                        <img src='img/flores.png' class='card-img-top' alt='flor' style='width:6rem; margin:auto;'>
                        <div class='card-body p-2'>
                            <span class='badge rounded-pill bg-danger shadow'>Flor 💖 #$i</span>
                        </div>
                    </div>
                </div>";
            }
            echo json_encode(["status" => "success", "html" => $html]);
        } else {
            echo json_encode(["status" => "error", "message" => "Cantidad inválida."]);
        }
        exit;
    }

    // 3. FUNCIONES DE TEXTO
    if ($action === 'texto') {
        $mensaje = $_POST['mensaje'] ?? '';
        $mayusculas = strtoupper($mensaje);
        $largo = strlen($mensaje);
        $mensaje_limpio = str_replace(["triste", "Triste", "TRISTE"], "feliz", $mensaje);
        
        $html = "
        <div class='alert text-start glass-alert' style='background-color: rgba(255, 255, 255, 0.4); border: 1px solid rgba(255, 107, 129, 0.5); color: #333;'>
            <p><strong>💭 Tu mensaje original:</strong> $mensaje</p>
            <p><strong>📣 Gritando de emoción (upper):</strong> $mayusculas</p>
            <p><strong>📏 Longitud del amor:</strong> Este mensaje tiene $largo letras.</p>
            <p><strong>✨ Mensaje optimista (replace):</strong> $mensaje_limpio</p>
        </div>";
        echo json_encode(["status" => "success", "html" => $html]);
        exit;
    }

    // 4. POO (COMPRA DE FLORES)
    if ($action === 'poo') {
        class Flor {
            public $nombreFlor;
            public $color;
            public $precioUnitario;

            public function __construct($f, $c, $p) {
                $this->nombreFlor = $f;
                $this->color = $c;
                $this->precioUnitario = $p;
            }

            public function descripcionBase() {
                return "Has elegido <strong>" . htmlspecialchars($this->nombreFlor) . "</strong> de color <strong>" . htmlspecialchars($this->color) . "</strong>.";
            }
        }

        class Ramo extends Flor {
            public $cantidad;
            public $dedicatoria;

            public function __construct($f, $c, $p, $cant, $nota) {
                parent::__construct($f, $c, $p);
                $this->cantidad = $cant;
                $this->dedicatoria = $nota;
            }

            public function mensajeFinal() {
                return "Nota adjunta: <em>'" . htmlspecialchars($this->dedicatoria) . "'</em>";
            }

            public function calcularTotal() {
                $total = $this->precioUnitario * $this->cantidad;
                return "El valor de este detalle es de: <strong class='text-danger'>Q" . $total . "</strong>";
            }
        }
        
        $detalle = new Ramo($_POST['flor'], $_POST['color'], $_POST['precio'], $_POST['cantidad'], $_POST['nota']);
        
        $html = "
        <div class='text-start p-3 glass-alert' style='background: rgba(255,255,255,0.5); border-radius:15px;'>
            <h4 class='text-center mb-3' style='color:#d63384;font-family:\"Dancing Script\", cursive;'>¡Ramo Preparado! 💐</h4>
            <p>🌺 " . $detalle->descripcionBase() . "</p>
            <p>💌 " . $detalle->mensajeFinal() . "</p>
            <hr>
            <p class='text-center fs-5'>" . $detalle->calcularTotal() . "</p>
        </div>";
        echo json_encode(["status" => "success", "html" => $html]);
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magia y Lógica ✨</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;800&family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS CSS para animaciones -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        /* === VARIABLES & BASE === */
        :root {
            --primary: #ff6b81;
            --secondary: #ff4757;
            --bg-gradient: linear-gradient(135deg, #fbc2eb 0%, #a6c1ee 100%);
        }

        body {
            font-family: 'Outfit', sans-serif;
            background: var(--bg-gradient);
            background-attachment: fixed;
            color: #333;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        /* Partículas / Efecto de fondo (Michi/Cat patterns) */
        body::before {
            content: '';
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background: url('img/michu.png') repeat;
            opacity: 0.05;
            z-index: -1;
            pointer-events: none;
            animation: moveBg 60s linear infinite;
        }

        @keyframes moveBg {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 1000px; }
        }

        h1, h2, .titulo-script {
            font-family: 'Dancing Script', cursive;
            color: var(--secondary);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
        }

        /* === GLASSMORPHISM === */
        .glass-container {
            background: rgba(255, 255, 255, 0.25);
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.5);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15);
            padding: 30px;
            margin-bottom: 30px;
            transition: transform 0.3s ease;
        }

        .glass-container:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.25);
        }

        .form-control, .form-select {
            background: rgba(255, 255, 255, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            color: #333;
        }
        
        .form-control:focus, .form-select:focus {
            background: rgba(255, 255, 255, 0.9);
            box-shadow: 0 0 10px rgba(255, 107, 129, 0.4);
            border-color: var(--primary);
        }

        .btn-custom {
            background: linear-gradient(45deg, var(--primary), var(--secondary));
            border: none;
            color: white;
            border-radius: 30px;
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(255, 71, 87, 0.4);
        }

        .btn-custom:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 20px rgba(255, 71, 87, 0.6);
            color: white;
        }

        /* === ESFERA 3D (TagCloud) === */
        #esfera-container {
            display: none; /* Oculto inicialmente */
            width: 100%;
            height: 60vh;
            justify-content: center;
            align-items: center;
            animation: fadeIn 2s ease forwards;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: scale(0.8); }
            to { opacity: 1; transform: scale(1); }
        }

        .tagcloud {
            font-family: 'Outfit', sans-serif;
            font-size: 20px;
            font-weight: 800;
            color: #ff4757;
            text-shadow: 1px 1px 3px rgba(255,255,255,0.8);
            cursor: pointer;
        }
        .tagcloud:hover { color: #fff; text-shadow: 1px 1px 5px #ff4757; }

        /* === REPRODUCTOR MUSICAL === */
        #btnMusica {
            position: fixed;
            bottom: 30px;
            right: 30px;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(5px);
            border: 2px solid var(--primary);
            color: var(--primary);
            border-radius: 50%;
            width: 60px;
            height: 60px;
            cursor: pointer;
            font-size: 24px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        #btnMusica.playing {
            background: var(--primary);
            color: white;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { box-shadow: 0 0 0 0 rgba(255, 107, 129, 0.7); }
            70% { box-shadow: 0 0 0 15px rgba(255, 107, 129, 0); }
            100% { box-shadow: 0 0 0 0 rgba(255, 107, 129, 0); }
        }

        .cat-img {
            max-width: 150px;
            border-radius: 15px;
            margin-bottom: 15px;
            animation: float 4s ease-in-out infinite;
        }

        @keyframes float {
            0% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0px); }
        }
    </style>
</head>
<body>

    <!-- REPRODUCTOR -->
    <audio id="miMusica" loop>
        <source src="img/a.mp3" type="audio/mpeg">
    </audio>
    <button id="btnMusica" onclick="controlarMusica()">🎵</button>

    <!-- HEADER -->
    <div class="container text-center pt-5 pb-3" data-aos="fade-down">
        <h1 class="display-3 fw-bold mb-3">Toda la Magia en un Solo Lugar ✨</h1>
        <p class="lead text-dark">Condicionales, Bucles, POO y Textos... pero con estilo. (Y música 🎶)</p>
    </div>

    <div class="container pb-5">
        
        <!-- ESFERA SECRETA (Se revela al acertar el condicional) -->
        <div id="esfera-container" class="glass-container flex-column" style="background: rgba(255, 255, 255, 0.4);">
            <h2 class="text-center mb-4">Cosas que me encantan de ti 💖</h2>
            <div class="esfera-textos d-flex justify-content-center"></div>
            <button class="btn btn-outline-danger mt-4" onclick="ocultarEsfera()">Cerrar Esfera</button>
        </div>

        <div class="row g-4" id="secciones-principales">
            
            <!-- 1. CONDICIONAL -->
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                <div class="glass-container h-100 text-center">
                    <img src="img/descarga.jpg" alt="cat" class="cat-img">
                    <h2>Condicional Mágico</h2>
                    <p class="text-muted">Si eres la persona correcta, descubrirás un secreto.</p>
                    
                    <form id="form-condicional" onsubmit="enviarFormulario(event, 'condicional')">
                        <input type="hidden" name="action" value="condicional">
                        <div class="row g-2 mb-3">
                            <div class="col-6"><input type="text" name="nombre" class="form-control" placeholder="Nombre (Ej: Karla)" required></div>
                            <div class="col-6"><input type="text" name="apellido" class="form-control" placeholder="Apellido (Ej: Jiménez)" required></div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-6"><input type="number" name="edad" class="form-control" placeholder="Edad (Ej: 20)" required></div>
                            <div class="col-6">
                                <select class="form-select" name="postre" required>
                                    <option value="" selected disabled>Tu postre Fav</option>
                                    <option value="1">Roles de canela bimbo</option>
                                    <option value="2">Anguila cocinada con pepinillos</option>
                                    <option value="3">Carpincho de chocolate</option>
                                </select> 
                            </div>
                        </div>
                        <button type="submit" class="btn btn-custom w-100">Desbloquear Secreto 🔐</button>
                    </form>
                </div>
            </div>

            <!-- 2. BUCLES -->
            <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                <div class="glass-container h-100 text-center">
                    <img src="img/michu.png" alt="cat" class="cat-img">
                    <h2>Bucles de Felicidad</h2>
                    <p class="text-muted">¿Cuántas flores quieres ver hoy? ʕ•́ᴥ•̀ʔっ♡</p>
                    
                    <form id="form-bucle" onsubmit="enviarFormulario(event, 'bucle')">
                        <input type="hidden" name="action" value="bucle">
                        <input type="number" name="cantidad" class="form-control mb-3" min="1" max="50" placeholder="Ej: 5" required>
                        <button type="submit" class="btn btn-custom w-100">Generar Flores 🌸</button>
                    </form>

                    <!-- Aquí se renderizan las flores -->
                    <div id="resultado-bucle" class="row justify-content-center mt-4"></div>
                </div>
            </div>

            <!-- 3. FUNCIONES DE TEXTO -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                <div class="glass-container h-100 text-center">
                    <img src="img/gatito.png" alt="cat" class="cat-img">
                    <h2>Magia con Textos</h2>
                    <p class="text-muted">Escribe un texto (usa la palabra "triste" si te atreves).</p>
                    
                    <form id="form-texto" onsubmit="enviarFormulario(event, 'texto')">
                        <input type="hidden" name="action" value="texto">
                        <textarea name="mensaje" class="form-control mb-3" rows="3" placeholder="Escribe aquí tu mensaje..." required></textarea>
                        <button type="submit" class="btn btn-custom w-100">Analizar Texto ✨</button>
                    </form>

                    <div id="resultado-texto" class="mt-4"></div>
                </div>
            </div>

            <!-- 4. POO -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                <div class="glass-container h-100 text-center">
                    <img src="img/flores.png" alt="cat" class="cat-img" style="border-radius: 50%;">
                    <h2>POO Romántica</h2>
                    <p class="text-muted">Compra de flores usando Programación Orientada a Objetos.</p>
                    
                    <form id="form-poo" onsubmit="enviarFormulario(event, 'poo')">
                        <input type="hidden" name="action" value="poo">
                        
                        <div class="row g-2 mb-2">
                            <div class="col-4"><input type="text" name="flor" class="form-control form-control-sm" placeholder="Flor (Ej: Rosa)" required></div>
                            <div class="col-4"><input type="text" name="color" class="form-control form-control-sm" placeholder="Color" required></div>
                            <div class="col-4"><input type="number" name="precio" class="form-control form-control-sm" placeholder="Q Precio" required></div>
                        </div>
                        <div class="row g-2 mb-3">
                            <div class="col-4"><input type="number" name="cantidad" class="form-control form-control-sm" placeholder="Cant." required></div>
                            <div class="col-8"><input type="text" name="nota" class="form-control form-control-sm" placeholder="Dedicatoria especial" required></div>
                        </div>

                        <button type="submit" class="btn btn-custom w-100">Crear Ramo 💐</button>
                    </form>

                    <div id="resultado-poo" class="mt-4"></div>
                </div>
            </div>

        </div> <!-- End Row -->
    </div>

    <!-- Scripts -->
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animate On Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- TagCloud JS -->
    <script src="https://cdn.jsdelivr.net/npm/TagCloud@2.2.0/dist/TagCloud.min.js"></script>

    <script>
        // Inicializar animaciones AOS
        AOS.init({ once: true });

        // === REPRODUCTOR DE MÚSICA ===
        const musica = document.getElementById('miMusica');
        const btn = document.getElementById('btnMusica');
        let interaccionUsuario = false;

        function controlarMusica() {
            if (musica.paused) {
                musica.play();
                btn.classList.add('playing');
                btn.innerHTML = '🔊';
            } else {
                musica.pause();
                btn.classList.remove('playing');
                btn.innerHTML = '🎵';
            }
        }

        // Iniciar música automáticamente con el primer clic en la página
        document.body.addEventListener('click', () => {
            if (!interaccionUsuario && musica.paused) {
                musica.play().then(() => {
                    btn.classList.add('playing');
                    btn.innerHTML = '🔊';
                }).catch(e => console.log("Auto-play prevenido por el navegador."));
                interaccionUsuario = true;
            }
        }, { once: true });

        // === ESFERA DE TEXTOS (TagCloud) ===
        let esferaInicializada = false;
        function mostrarEsfera() {
            document.getElementById('esfera-container').style.display = 'flex';
            document.getElementById('secciones-principales').style.display = 'none'; // Ocultar lo demás para dar protagonismo

            if(!esferaInicializada) {
                const misTextos = [
                    'Tu sonrisa', 'Tus ojos', 'Tu inteligencia', 'Lo increíble que eres :D',
                    'Tu sentido del humor', 'Tu forma de ser', 'Tu Dedicación', 'Tu voz',
                    'Tu perseverancia', 'Tu entrega', 'Tu carisma', 'Tus excentricidades',
                    'Tu curiosidad', 'Tu memoria de Dory', 'Tu locura tan linda', 'Todo'
                ];

                const opciones = {
                    radius: Math.min(window.innerWidth, window.innerHeight) / 3,
                    maxSpeed: 'fast',
                    initSpeed: 'normal',
                    direction: 135,
                    keep: true
                };

                TagCloud('.esfera-textos', misTextos, opciones);
                esferaInicializada = true;
            }
        }

        function ocultarEsfera() {
            document.getElementById('esfera-container').style.display = 'none';
            document.getElementById('secciones-principales').style.display = 'flex';
        }

        // === AJAX FETCH (LÓGICA) ===
        async function enviarFormulario(event, action) {
            event.preventDefault();
            const form = event.target;
            const formData = new FormData(form);

            // Fetch a este mismo archivo
            try {
                const response = await fetch('', {
                    method: 'POST',
                    body: formData
                });
                
                const data = await response.json();

                if(action === 'condicional') {
                    if(data.status === 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: '¡Correcto!',
                            text: data.message,
                            background: 'rgba(255,255,255,0.9)',
                            backdrop: `rgba(255,107,129,0.4)`
                        }).then(() => {
                            mostrarEsfera();
                            form.reset();
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: data.message
                        });
                    }
                }

                if(action === 'bucle') {
                    if(data.status === 'success') {
                        const contenedor = document.getElementById('resultado-bucle');
                        contenedor.innerHTML = data.html;
                        form.reset();
                    } else {
                        Swal.fire('Error', data.message, 'error');
                    }
                }

                if(action === 'texto') {
                    if(data.status === 'success') {
                        document.getElementById('resultado-texto').innerHTML = data.html;
                        form.reset();
                    }
                }

                if(action === 'poo') {
                    if(data.status === 'success') {
                        document.getElementById('resultado-poo').innerHTML = data.html;
                        form.reset();
                    }
                }

            } catch (error) {
                console.error('Error:', error);
                Swal.fire('Error', 'Hubo un problema de conexión.', 'error');
            }
        }
    </script>
</body>
</html>
