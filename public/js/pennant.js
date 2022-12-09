
export const getMessage = async (id) => {
    // Fake API call; would go to /api/message/{id}
    const response = await fetch('/message.json');

    if (response.ok) {
        return await response.json();
    }

    throw Error('Cannot get message')
}
