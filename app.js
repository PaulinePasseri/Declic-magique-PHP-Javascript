const categoriesData = [
    {
        "categories": [
            {
                "title": "Organisation familiale",
                "image": "./assets/Quizz/orga-famille.png",
                "questions": [
                    {
                        "question": "Imaginez le lundi matin : le réveil sonne, les enfants cherchent leurs affaires, le café déborde... <br>Votre planning familial c’est plutôt :",
                        "options": [
                            { "text": "Du freestyle total : on improvise chaque jour et on croise les doigts", "points": 0 },
                            { "text": "Tout est affiché sur le frigo, même le goûter d’anniversaire du chien", "points": 2 },
                            { "text": "Il y a un agenda… quelque part sous la pile de courrier", "points": 1 }
                        ]
                    },
                    {
                        "question": "Les tâches ménagères, c’est un peu votre deuxième job. Ça se passe comment chez vous ?",
                        "options": [
                            { "text": "C’est moi qui gère tout, de la lessive au 'qui a encore renversé des céréales ?'", "points": 2 },
                            { "text": "Mon/ma partenaire s’implique, mais j’ai quand même l’œil sur tout", "points": 1 },
                            { "text": "On partage équitablement, je peux lâcher prise sans stress", "points": 0 }
                        ]
                    },
                    {
                        "question": "La fameuse question : 'Qu’est-ce qu’on mange ce soir ?'… Vous :",
                        "options": [
                            { "text": "Attendez l’inspiration devant le frigo ouvert", "points": 0 },
                            { "text": "Sortez fièrement votre menu de la semaine comme une cheffe d’orchestre", "points": 2 },
                            { "text": "Foncez sur les pâtes, encore et toujours", "points": 1 }
                        ]
                    },
                    {
                        "question": "Entre les rendez-vous chez le pédiatre et la réunion parents-profs, qui gère le planning ?",
                        "options": [
                            { "text": "Moi, avec des rappels sur mon téléphone et des post-its partout", "points": 2 },
                            { "text": "On alterne selon nos disponibilités", "points": 1 },
                            { "text": "C’est surtout mon/ma partenaire qui s’en charge", "points": 0 }
                        ]
                    },
                    {
                        "question": "Vous partez en sortie familiale : sacs, goûters, itinéraire... Vous êtes :",
                        "options": [
                            { "text": "La coordinatrice officielle avec checklist (et une trousse de secours)", "points": 2 },
                            { "text": "Partageuse de responsabilités, chacun a sa mission", "points": 1 },
                            { "text": "Juste la passagère : 'Je monte, je me laisse guider !'", "points": 0 }
                        ]
                    }
                ]
            },
            {
                "title": "Vie professionnelle",
                "image": "./assets/Quizz/vie-pro.png",
                "questions": [
                  {
                    "question": "Devant votre to-do list du matin, votre réaction :",
                    "options": [
                      { "text": "Bon, je commence par quoi... et pourquoi il y a déjà 10 nouvelles tâches ?", "points": 2 },
                      { "text": "Je priorise avec mon café et j’attaque méthodiquement", "points": 2 },
                      { "text": "Je fais au feeling et on verra bien", "points": 0 }
                    ]
                  },
                  {
                    "question": "Quand un email urgent débarque à 17h29, vous :",
                    "options": [
                      { "text": "Soupirez mais lisez quand même", "points": 1 },
                      { "text": "Vous précipitez pour répondre, même si ça vous retarde", "points": 2 },
                      { "text": "Fermez l’ordi, ça attendra demain", "points": 0 }
                    ]
                  },
                  {
                    "question": "Finir la journée sans avoir coché toutes vos tâches, c’est :",
                    "options": [
                      { "text": "Votre quotidien", "points": 2 },
                      { "text": "Occasionnel mais frustrant", "points": 1 },
                      { "text": "Rare, je gère bien mon temps", "points": 0 }
                    ]
                  },
                  {
                    "question": "Les interruptions au travail :",
                    "options": [
                      { "text": "Mes collègues pensent que je suis leur agenda personnel", "points": 2 },
                      { "text": "Il y en a, mais j’arrive à les limiter", "points": 1 },
                      { "text": "Rares et bien gérées", "points": 0 }
                    ]
                  },
                  {
                    "question": "À la fin de la journée, votre esprit est :",
                    "options": [
                      { "text": "Encore au boulot à ressasser cette réunion de trop", "points": 2 },
                      { "text": "Mi-prêt pour la soirée, mi-submergé de pensées", "points": 1 },
                      { "text": "Off, totalement déconnecté", "points": 0 }
                    ]
                  }
                ]
            },
            {
                "title": "Charge émotionnelle",
                "image": "./assets/Quizz/charge-emo.png",
                "questions": [
                    {
                        "question": "Qui pense aux cadeaux d’anniversaire, cartes et autres attentions familiales ?",
                        "options": [
                            { "text": "C’est toujours moi, la mémoire émotionnelle de la famille", "points": 2 },
                            { "text": "On s’y met à deux avec mon/ma partenaire", "points": 1 },
                            { "text": "J’y pense si quelqu’un me le rappelle", "points": 0 }
                        ]
                    },
                    {
                        "question": "Quand un proche traverse un moment difficile :",
                        "options": [
                            { "text": "Je prends tout à cœur, je veux aider même si je suis déjà épuisé(e)", "points": 2 },
                            { "text": "J’écoute mais je garde mes limites", "points": 1 },
                            { "text": "Je soutiens quand je peux sans me sacrifier", "points": 0 }
                        ]
                    },
                    {
                        "question": "Si vos enfants/parents vous sollicitent émotionnellement :",
                        "options": [
                            { "text": "Je porte tout sur mes épaules", "points": 2 },
                            { "text": "Je gère mais ça me fatigue", "points": 1 },
                            { "text": "J’aide sans m’oublier ", "points": 0 }
                        ]
                    },
                    {
                        "question": "Face à un conflit dans votre entourage :",
                        "options": [
                            { "text": "J’essaie d’arranger tout le monde, quitte à m’oublier", "points": 2 },
                            { "text": "Je temporise et choisis mes batailles", "points": 1 },
                            { "text": "Je lâche quand ce n’est pas mon problème", "points": 0 }
                        ]
                    },
                    {
                        "question": "Prendre du temps pour moi... euh, c’est possible ça ?",
                        "options": [
                            { "text": "Je culpabilise rien qu’en y pensant", "points": 2 },
                            { "text": "J’essaie mais c’est compliqué", "points": 1 },
                            { "text": "C’est non négociable, mon bien-être avant tout", "points": 0 }
                        ]
                    }
                ]
            },
            {
                "title": "Gestion des imprévus",
                "image": "./assets/Quizz/imprevus.png",
                "questions": [
                    {
                        "question": "Quand tout part en vrille (panne de réveil, tache sur le pantalon, mail urgent) :",
                        "options": [
                            { "text": "Je stresse et je râle... beaucoup", "points": 2 },
                            { "text": "Je souffle un grand coup et j’improvise", "points": 1 },
                            { "text": "Je prends ça avec humour et je m’adapte", "points": 0 }
                        ]
                    },
                    {
                        "question": "On change vos plans à la dernière minute :",
                        "options": [
                            { "text": "Alerte panique, mon planning est sacré", "points": 2 },
                            { "text": "Je râle mais je m’ajuste", "points": 1 },
                            { "text": "Pas grave, je prends les choses comme elles viennent", "points": 0 }
                        ]
                    },
                    {
                        "question": "Quelqu’un vous demande un service urgent alors que votre journée est déjà blindée :",
                        "options": [
                            { "text": "Je dis oui... et je m’en veux après", "points": 2 },
                            { "text": "Je réfléchis avant de répondre", "points": 1 },
                            { "text": "Non c’est non, et c’est ok", "points": 0 }
                        ]
                    },
                    {
                        "question": "Si un imprévu familial tombe pendant un moment pour vous :",
                        "options": [
                            { "text": "Je laisse tout tomber", "points": 2 },
                            { "text": "Je négocie un compromis", "points": 1 },
                            { "text": "Je vois si c’est vraiment urgent avant de réagir", "points": 0 }
                        ]
                    },
                    {
                        "question": "Quand les plans déraillent :",
                        "options": [
                            { "text": "Je ressasse et ça me gâche la journée", "points": 2 },
                            { "text": "Je peste cinq minutes puis ça passe", "points": 1 },
                            { "text": "Je relativise vite", "points": 0 }
                        ]
                    }
                ]
            },
            {
                "title": "Prise de temps pour soi",
                "image": "./assets/Quizz/tps-pour-soi.png",
                "questions": [
                    {
                        "question": "La dernière fois que vous avez fait quelque chose juste pour vous (sans enfant, sans ménage, sans 'juste un truc rapide') :",
                        "options": [
                            { "text": "Je ne m’en souviens même pas", "points": 2 },
                            { "text": "Ça remonte à plusieurs semaines", "points": 1 },
                            { "text": "Cette semaine et je compte recommencer", "points": 0 }
                        ]
                    },
                    {
                        "question": "Le sommeil et vous, c’est :",
                        "options": [
                            { "text": "On est en froid, il me boude", "points": 2 },
                            { "text": "Ça dépend des jours", "points": 1 },
                            { "text": "Une belle histoire d’amour", "points": 0 }
                        ]
                    },
                    {
                        "question": "Vos moments de détente sont :",
                        "options": [
                            { "text": "Une légende urbaine", "points": 2 },
                            { "text": "Rares mais précieux", "points": 1 },
                            { "text": "Réguliers et sacrés", "points": 0 }
                        ]
                    },
                    {
                        "question": "Vous culpabilisez quand vous prenez du temps pour vous :",
                        "options": [
                            { "text": " Comme si j’abandonnais un navire en flammes", "points": 2 },
                            { "text": "Parfois, mais j’essaie de lâcher prise", "points": 1 },
                            { "text": "Pas du tout, je le mérite !", "points": 0 }
                        ]
                    },
                    {
                        "question": "Vous avez une activité-plaisir dans votre routine :",
                        "options": [
                            { "text": "Non, plaisir c’est un mot que je lis seulement dans les magazines", "points": 2 },
                            { "text": "De temps en temps", "points": 1 },
                            { "text": "Oui, et j’adore ça", "points": 0 }
                        ]
                    }
                ]
            },
            {
                "title": "Symptômes de la charge mentale",
                "image": "./assets/Quizz/symptomes-cm.png",
                "questions": [
                    {
                        "question": "Le soir au coucher, vos pensées ressemblent à :",
                        "options": [
                            { "text": "Une playlist en boucle de 'j’aurais dû...' et 'il ne faut pas que j’oublie...'", "points": 2 },
                            { "text": "Quelques pensées qui traînent, mais je m’endors quand même", "points": 1 },
                            { "text": "Je ferme les yeux et c’est le black-out", "points": 0 }
                        ]
                    },
                    {
                        "question": "Votre niveau de fatigue est comparable à :",
                        "options": [
                            { "text": "Une batterie d’iPhone en fin de journée", "points": 2 },
                            { "text": "Une pile rechargeable qui faiblit parfois", "points": 1 },
                            { "text": "Une pile neuve et pleine d’énergie", "points": 0 }
                        ]
                    },
                    {
                        "question": "Vous avez déjà ressenti :",
                        "options": [
                            { "text": "Des maux de tête, tensions ou douleurs sans raison médicale apparente", "points": 2 },
                            { "text": "Parfois des petits bobos du stress", "points": 1 },
                            { "text": "Rien de particulier", "points": 0 }
                        ]
                    },
                    {
                        "question": "Quand vous avez trop de choses à faire :",
                        "options": [
                            { "text": "Vous vous énervez, pleurez ou vous sentez dépassée", "points": 2 },
                            { "text": "Vous ressentez du stress mais essayez de respirer", "points": 1 },
                            { "text": "Vous gérez sans drame", "points": 0 }
                        ]
                    },
                    {
                        "question": "Ces derniers temps, votre patience avec les autres est :",
                        "options": [
                            { "text": "Aux abonnés absents", "points": 2 },
                            { "text": "Moyenne, je prends sur moi", "points": 1 },
                            { "text": "Plutôt bonne, je garde mon calme", "points": 0 }
                        ]
                    }
                ]
            }
        ],
        "interpretation": [
            {
                "range": "0-8",
                "message": "Charge mentale très faible – Vous gérez comme une cheffe et vous méritez un autocollant 'Queen de l’équilibre' ! 🎉 Même si tout roule, je vous envoie quand même votre petit cadeau (lead magnet) pour entretenir cette belle énergie."
            },
            {
                "range": "9-15",
                "message": "Charge mentale légère – Ça va globalement, mais quelques ajustements peuvent rendre votre quotidien encore plus doux. Je vous envoie votre diagnostic avec des astuces concrètes. 🌼"
            },
            {
                "range": "16-22",
                "message": "Charge mentale modérée – Vous gérez beaucoup et ça commence à peser... Pas de panique, il y a des solutions. Découvrez des outils pratiques avec le programme 'RECENTRAGE COGNITIF AVANCÉ'. 💪"
            },
            {
                "range": "23+",
                "message": "Charge mentale élevée – Stop ! Vous n’êtes pas un robot. Il est temps de faire passer vos besoins en priorité. Je vous envoie votre diagnostic + mes conseils pour alléger tout ça, et si besoin, parlons d’un accompagnement plus poussé. ❤️"
            }
        ]
    }
];


const categories = categoriesData[0].categories
const categoryTitle = document.getElementById('category-title');
const categoryImage = document.getElementById('category-image');
const questionContainer = document.getElementById('question-container');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

let currentCategoryIndex = 0;
let userResponses = {}; // Stocker les réponses de l'utilisateur (catégorie -> question -> réponse)

// Fonction pour afficher une catégorie (TOUTES les questions)
function showCategory() {
    const category = categories[currentCategoryIndex];
    categoryTitle.textContent = category.title;
    categoryImage.src = category.image;
    categoryImage.alt = `Illustration de ${category.title}`;

    let allQuestionsHTML = '';

    category.questions.forEach((question, questionIndex) => {
        // Début du conteneur question-content pour CHAQUE question
        let questionHTML = `
            <div class="question-content"> 
                <div class="question">
                    ${question.question}
                </div>
                <div class="options">
        `;

        question.options.forEach((option, optionIndex) => {
            questionHTML += `
                <label>
                    <input type="radio" name="category-${currentCategoryIndex}-question-${questionIndex}" value="${optionIndex}" class="question-input" ${userResponses[currentCategoryIndex]?.[questionIndex] === optionIndex ? 'checked' : ''}>
                    ${option.text}
                </label>
            `;
        });

        questionHTML += `
                </div>
            </div> <!-- Fin du conteneur question-content -->
        `;
        allQuestionsHTML += questionHTML;
    });

    questionContainer.innerHTML = allQuestionsHTML;

    // Ajout des gestionnaires d'événements pour chaque groupe de boutons radio
    category.questions.forEach((question, questionIndex) => {
        const radioButtons = document.querySelectorAll(`input[name="category-${currentCategoryIndex}-question-${questionIndex}"]`);
        radioButtons.forEach(radio => {
            radio.addEventListener('change', () => {
                // Assurez-vous que userResponses[currentCategoryIndex] est un objet
                if (!userResponses[currentCategoryIndex]) {
                    userResponses[currentCategoryIndex] = {};
                }
                userResponses[currentCategoryIndex][questionIndex] = parseInt(radio.value);
            });
        });
    });
}

nextBtn.addEventListener('click', () => {
    if (currentCategoryIndex < categories.length - 1) {
        currentCategoryIndex++;
        showCategory();
        // Faire défiler la page vers le haut de la section quizz-content
        document.querySelector('.quizz-content').scrollIntoView({ behavior: 'smooth' }); // ou 'auto' pour un défilement instantané
    } else {
        // Fin du quiz (calcul des résultats, etc.)
        alert("Quiz terminé !");
        console.log(userResponses);
    }
});

prevBtn.addEventListener('click', () => {
    if (currentCategoryIndex > 0) {
        currentCategoryIndex--;
        showCategory();
        // Faire défiler la page vers le haut de la section quizz-content
        document.querySelector('.quizz-content').scrollIntoView({ behavior: 'smooth' }); // ou 'auto' pour un défilement instantané
    }
});

// Initialisation
showCategory();