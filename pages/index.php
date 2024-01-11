<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<body>
    <header>
        <div class="left-section">
        </div>
        <div class="right-section">
            <div class="buttons-container">
                <div class="button-group">
                    <input type="text" placeholder="Arama Alanı">
                    <button class="icon-button"><i class="fas fa-search icon"></i></button>
                </div>
                <button class="bordered-button">Üyelik</button>
            </div>
            <div class="links">
                <div class="link-item">
                    <span>Link 1</span>
                    <div class="menu">
                        <div class="content">
                            <div class="square">
                                <div class="blue-square"></div>
                                <div class="up-arrow"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="seperator"></div>
                <div class="link-item">
                    <span>Link 2</span>
                    <div class="menu">
                        <div class="content">
                            <div class="square">
                                <div class="blue-square"></div>
                                <div class="up-arrow"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="seperator"></div>
                <div class="link-item">
                    <span>Link 3</span>
                    <div class="menu">
                        <div class="content">
                            <div class="square">
                                <div class="blue-square"></div>
                                <div class="up-arrow"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="seperator"></div>
                <div class="link-item">
                    <span>Link 4</span>
                    <div class="menu">
                        <div class="content">
                            <div class="square">
                                <div class="blue-square"></div>
                                <div class="up-arrow"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="seperator"></div>
                <div class="link-item">
                    <span>Link 5</span>
                    <div class="menu">
                        <div class="content">
                            <div class="square">
                                <div class="blue-square"></div>
                                <div class="up-arrow"></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="link-items">
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                    <div class="link">Alt link</div>
                </div>
            </div>
        </div>
    </header>
    <div class="gray-seperator"></div>
    <main>
        <div class="bg"></div>
    </main>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const links = document.querySelectorAll(".link-item").forEach(e => {
                e.addEventListener("mouseover", (event) => {
                    document.querySelector(".link-items").style.display = 'flex'
                });
                e.addEventListener("mouseleave", (event) => {
                    document.querySelector(".link-items").style.display = 'none'
                });
            })
        })
    </script>
</body>

</html>