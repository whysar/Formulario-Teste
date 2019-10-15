describe('Page Test', function() {
    it('Visits Form Test', function() {
        cy.visit('http://localhost:8000')

        cy.contains('Name')
        cy.get('input[name="name"]').type('Teste')
        cy.contains('Feedback')
        cy.get('input[name="feedback"]').type('abcdefghijklmnopqrstuvwxyz')
        

        cy.contains('Submit').click()

        cy.contains('Welcome Teste, we appreciate your feedback.')

    
    })
})

