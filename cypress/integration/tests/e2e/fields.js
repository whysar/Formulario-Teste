describe('Page Test', function() {
    it('Visits Form Test', function() {
        cy.visit('http://localhost:8000')

        cy.contains('Name')
        cy.contains('E-mail')
        cy.contains('Telephone')
        cy.contains('Feedback*')
        cy.contains('Service Quality')
        cy.contains('Submit').click()

        
    })
})