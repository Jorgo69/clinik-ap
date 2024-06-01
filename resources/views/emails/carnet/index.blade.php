<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carnet médical</title>
    <!-- Inclure les fichiers CSS de Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <div id="pdf-content" class="row">
        <div class="container mt-5">
            <h1 class="text-center mb-4">Carnet médical</h1>
            <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <ul class="list-unstyled timeline-sm">
                    <li class="timeline-sm-item">
                        <div class="text-center">
                            <span class="timeline-sm-date">Consultation du <span class="text-capitalize">{{ \Carbon\Carbon::parse($data->created_at)->translatedFormat('D d F Y') }}</span> </span>
                        </div>
                        <?php
                            use Carbon\Carbon;
                            Carbon::setLocale('fr');
                        ?>
                        <h3 class="mt-0 mb-1">{{$data->pattern}}</h3>
                        <hr>
                        <!-- Diagnostic -->
                        <h5>Diagnostic</h5>
                        <p class="text-muted mt-2"></p>
                        <p>{!! $data->diagnostic !!}</p>
                        <hr>
                        <!-- Observation -->
                        <h5>Observation</h5>
                        <p class="text-muted mt-2"></p>
                        <p>{!! $data->observation !!}</p>
                        <hr>
                        <!-- Prescription -->
                        <h5>Prescription</h5>
                        <p class="text-muted mt-2"></p>
                        <p>{{__('Prescription')}}</p>
                        <hr>
                        <!-- Signature -->
                        <div class="float-right mb-5">
                            <h5>Signature</h5>
                            <p class="text-muted mt-2"></p>
                            <p>{{ $data->medecins->name .' '. $data->medecins->firstname }}</p>
                            <p class="text-uppercase text-info font-weight-bold">Specialite</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="container">
            <p class="float-right">
                <a href="javascript:void(0);" onclick="saveAsPDF()" class="btn btn-info">Enregistrer en PDF</a>
            </p>
        </div>
    </div>
    
    

    <script>
        async function saveAsPDF() {
            // Import jsPDF from the global namespace
            const { jsPDF } = window.jspdf;
    
            // Sélectionnez l'élément HTML que vous souhaitez convertir en PDF
            const element = document.getElementById('pdf-content');
    
            // Utilisez html2canvas pour capturer l'élément HTML
            const canvas = await html2canvas(element);
    
            // Obtenez les données d'image du canvas
            const imgData = canvas.toDataURL('image/png');
    
            // Créez une nouvelle instance jsPDF avec des dimensions A4
            const doc = new jsPDF({
                orientation: 'portrait',
                unit: 'mm',
                format: 'a4'
            });
    
            // Calculez la taille de l'image pour qu'elle s'adapte à la page A4
            const imgProps = doc.getImageProperties(imgData);
            const pdfWidth = doc.internal.pageSize.getWidth();
            const pdfHeight = doc.internal.pageSize.getHeight();
            const marginLeftRight = 10; // Marge à gauche et à droite
            const imgWidth = pdfWidth - 2 * marginLeftRight;
            const imgHeight = (imgProps.height * imgWidth) / imgProps.width;
    
            // Marge en haut
            const marginTop = 20;
    
            // Ajoutez l'image au document PDF avec des marges spécifiées
            doc.addImage(imgData, 'PNG', marginLeftRight, marginTop, imgWidth, imgHeight);
    
            // Enregistrez le fichier PDF
            doc.save('carnet_medical_A4.pdf');
        }
    </script>
    
    
    
    
    

<!-- Inclure les fichiers JavaScript de Bootstrap (jQuery requis) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
{{-- Dependance pour la capture qui va generer le pdf --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>


</body>
</html>
