import { useState } from 'react';

function ContactForm() {
    const [formData, setFormData] = useState({
        name: '',
        email: '',
        email_confirmation: '',
        phone: '',
        subject: '',
        message: '',
    });

    const [errors, setErrors] = useState({});

    const handleChange = (event) => {
        const { name, value } = event.target;

        setFormData({
            ...formData,
            [name]: value,
        });

        if (name === 'email_confirmation') {
            if (value !== formData.email) {
                event.target.setCustomValidity('De e-mailadressen komen niet overeen.');
            } else {
                event.target.setCustomValidity('');
            }
        }
    };

    const handleSubmit = (event) => {
        event.preventDefault();

        console.log(formData);

        fetch('/contact', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
            },
            body: JSON.stringify(formData),
        })
            .then(response => {
                if (!response.ok) {
                    return response.json().then(data => {
                        throw data;
                    });
                }

                return response.json();
            })
            .then(data => {
                console.log('Success:', data);

                setFormData({
                    name: '',
                    email: '',
                    email_confirmation: '',
                    phone: '',
                    subject: '',
                    message: '',
                });

                alert('We hebben je bericht ontvangen. We nemen zo snel mogelijk contact met je op.');
            })
            .catch(error => {
                console.log('Validation errors:', error);
                setErrors(error.errors);
            });
    };

    return (
        <form onSubmit={handleSubmit}>

            <div className="mb-4">
                <label htmlFor="name" className="block text-gray-700 font-bold mb-2">
                    *Naam:
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value={formData.name}
                    onChange={handleChange}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green"
                    onInvalid={(event) => event.target.setCustomValidity('Vul je naam in.')}
                    onInput={(event) => event.target.setCustomValidity('')}
                    required
                />
            </div>

            <div className="mb-4">
                <label htmlFor="email" className="block text-gray-700 font-bold mb-2">
                    *E-mail:
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value={formData.email}
                    onChange={handleChange}
                    onInvalid={(event) => event.target.setCustomValidity('Vul een geldig e-mailadres in.')}
                    onInput={(event) => event.target.setCustomValidity('')}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green"
                    required
                />
            </div>

            <div className="mb-4">
                <label htmlFor="email_confirmation" className="block text-gray-700 font-bold mb-2">
                    *Bevestig E-mail:
                </label>

                <input
                    type="email"
                    id="email_confirmation"
                    name="email_confirmation"
                    value={formData.email_confirmation}
                    onChange={handleChange}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green"
                    onInvalid={(event) => {
                        if (event.target.validity.valueMissing) {
                            event.target.setCustomValidity('Vul je e-mail bevestiging in.');
                        }
                    }}
                    onInput={(event) => {
                        if (!event.target.value) {
                            event.target.setCustomValidity('');
                        }
                    }}
                    required
                />
            </div>

            <div className="mb-4">
                <label htmlFor="phone" className="block text-gray-700 font-bold mb-2">
                    Telefoonnummer:
                </label>

                <input
                    type="tel"
                    id="phone"
                    name="phone"
                    value={formData.phone}
                    onChange={handleChange}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green"
                />
            </div>

            <div className="mb-4">
                <label htmlFor="subject" className="block text-gray-700 font-bold mb-2">
                    *Onderwerp:
                </label>

                <input
                    type="text"
                    id="subject"
                    name="subject"
                    value={formData.subject}
                    onChange={handleChange}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green"
                    onInvalid={(event) => event.target.setCustomValidity('Vul een onderwerp in.')}
                    onInput={(event) => event.target.setCustomValidity('')}
                    required
                />
            </div>

            <div className="mb-4">
                <label htmlFor="message" className="block text-gray-700 font-bold mb-2">
                    *Bericht:
                </label>

                <textarea
                    id="message"
                    name="message"
                    value={formData.message}
                    onChange={handleChange}
                    className="w-full rounded-lg border border-gray-300 px-4 py-3 text-black shadow-sm focus:outline-none focus:ring-2 focus:ring-green min-h-32"
                    onInvalid={(event) => event.target.setCustomValidity('Vul je bericht in.')}
                    onInput={(event) => event.target.setCustomValidity('')}
                    required
                ></textarea>
            </div>

            <div className="text-red-500">
                <p>* verplicht</p>
            </div>

            <button
                type="submit"
                className="btn"
            >
                Verstuur
            </button>

        </form>
    );
}

export default ContactForm;
