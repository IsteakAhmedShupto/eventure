<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../root.css" />
    <link rel="stylesheet" href="./nav-section.css">
    <link rel="stylesheet" href="./ques-ans.css">
    <link rel="stylesheet" href="../footer.css" />
    <title>Q and A</title>
</head>

<body>
    <?php include "./nav-section.php"; ?>

    <div class="ques-ans-container">
        <section class="questions">
            <div class="title">
                <h2>General questions</h2>
            </div>
            <div class="section-center">
                <article class="question">
                    <div class="question-title">
                        <p>Do you accept all major credit cards?</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            Yes, we accept all major credit cards!
                        </p>
                    </div>
                </article>
                <article class="question">
                    <div class="question-title">
                        <p>Do you have loan options?</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            Yes, we have loan options!
                        </p>
                    </div>
                </article>
                <article class="question">
                    <div class="question-title">
                        <p>Do you use online payment options?</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            No, we take our payments via bank cheques only.
                        </p>
                    </div>
                </article>
                <article class="question">
                    <div class="question-title">
                        <p>Do you guys have any marketing agency?</p>
                        <button type="button" class="question-btn">
                            <span class="plus-icon">
                                <i class="far fa-plus-square"></i>
                            </span>
                            <span class="minus-icon">
                                <i class="far fa-minus-square"></i>
                            </span>
                        </button>
                    </div>
                    <div class="question-text">
                        <p>
                            No, currently we are focusing on making eventure one of the best.
                        </p>
                    </div>
                </article>
        </section>

    </div>

    <?php include "../footer.php"; ?>

    <!--Javascript file attachment-->
    <script src="./ques-ans.js"></script>
</body>

</html>