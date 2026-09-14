function Footer() {
    return (
        <footer className="bg-green text-black">

            <div className="max-w-6xl mx-auto px-6 py-12">
                <div className="grid grid-cols-1 md:grid-cols-3 gap-10">

                    {/* Logo */}
                    <div className="flex flex-col items-center md:items-start">
                        <img
                            src="/images/pojLogo.png"
                            alt="Paws of joy logo"
                            className="h-24 w-auto mb-4"
                        />

                        <h2 className="text-xl font-bold italic">
                            Hondenuitlaatservice
                        </h2>

                        <p className="mt-3">
                            Samen op pad, met plezier.
                        </p>
                    </div>

                    {/* Contactgegevens */}
                    <div className="text-center md:text-left">
                        <h3 className="text-xl font-bold mb-4">
                            Contact
                        </h3>

                        <p>Paws of joy</p>
                        <p>Rijksweg 15</p>
                        <p>5125NB Hulten</p>

                        <p className="mt-3">
                            <a
                                href="tel:0625282606"
                                className="hover:text-yellow transition-colors"
                            >
                                06 25282606
                            </a>
                        </p>

                        <p className="mt-2 font-bold">
                            KvK 71318658
                        </p>
                    </div>

                    {/* Social media & juridische links */}
                    <div className="text-center md:text-left">
                        <h3 className="text-xl font-bold mb-4">
                            Meer informatie
                        </h3>

                        <div className="flex flex-col gap-2 items-center md:items-start">
                            <a
                                href="https://www.facebook.com/pawsofjoy"
                                target="_blank"
                                rel="noopener noreferrer"
                                className="hover:text-yellow transition-colors flex flex-row items-center gap-2"
                            >
                                <img src="/images/2023_Facebook_icon.svg.webp" alt="Facebook" className="h-6 w-6" />Paws of joy
                            </a>

                            <a
                                href="/termsAndConditions"
                                className="hover:text-yellow transition-colors"
                            >
                                Algemene voorwaarden
                            </a>

                            <a
                                href="/privacy"
                                className="hover:text-yellow transition-colors"
                            >
                                Privacyverklaring
                            </a>

                            <a
                                href="/cookies"
                                className="hover:text-yellow transition-colors"
                            >
                                Cookies
                            </a>
                        </div>
                    </div>

                </div>
            </div>

            {/* Copyright */}
            <div className="border-t border-black/20">
                <div className="max-w-6xl mx-auto px-6 py-4 text-center text-sm">
                    <p>
                        &copy; {new Date().getFullYear()} Paws of joy. Alle rechten voorbehouden.
                    </p>
                    <p>Gemaakt door <a href="https://www.linkedin.com/in/kelvin-sophie-a90298325/"
                        target="_blank"
                        rel="noopener noreferrer"
                        className="hover:text-yellow transition-colors">Kelvin Sophie</a></p>
                </div>
            </div>

        </footer>
    );
}

export default Footer;
