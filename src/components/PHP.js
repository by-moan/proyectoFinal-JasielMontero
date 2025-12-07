export const PHP = class {
    static async POST(path, dataJSON, onReply) {
        if(!path || !dataJSON || !onReply) throw new Error("One or more arguments are missing");
        const result = await fetch(`/api/${path}`, {
            method: "POST",
            headers: {
                "Content-Type": "application/json"
            },
            body: JSON.stringify(dataJSON)
        }).then(r => r.json())
        .then(data => {
            onReply(data);
        });;
    }
}