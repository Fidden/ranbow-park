import {useStore} from "pinia-class-store";
import {router} from "@inertiajs/vue3";

class IndexScreenModel {
    constructor() {
        this.form = {
            email: undefined,
            ticket_id: 0
        }
        this.tickets = undefined;
    }

    submit() {
        router.post('/order', this.form)
    }

    init(tickets) {
        this.tickets = tickets;
        this.form.ticket_id = this.tickets[0].id
    }
}

/**
 *
 * @type {() => IndexScreenModel}
 */
export const indexScreenModel = useStore.bind(undefined, IndexScreenModel);
